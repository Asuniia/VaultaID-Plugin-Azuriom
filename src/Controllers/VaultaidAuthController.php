<?php

namespace Azuriom\Plugin\Vaultaid\Controllers;

use Azuriom\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class VaultaidAuthController extends Controller
{

    public function redirect()
    {
        
        if (Auth::check()) {
            return redirect('/');
        }

        if(!setting('vaultaid.enable_vaultaid')) {
            return redirect('/');
        }

        if(setting('vaultaid.enable_script')) {
            return redirect('/');
        }

        Session::put('socialite_callback', 'from_controller');

        $url = "https://vaultaid.aktech.fr/app/authorize" .
                            "?client_id=" . setting('vaultaid.client_id') .
                            "&redirect_uri=" . (setting('vaultaid.redirect_uri') == '' ? urlencode(config('app.url') . "/vaultaid/callback") : setting('vaultaid.redirect_uri')) .
                            "&response_type=code" .
                            "&scope=" . implode(" ", json_decode(setting('vaultaid.scopes', '[]')));

        return redirect($url);
    
    }

    public function callback(Request $request) {


        if(!setting('vaultaid.enable_vaultaid')) {
            return redirect('/');
        }

        if(setting('vaultaid.enable_script')) {
            Session::put('socialite_callback', 'from_controller');
        }

        $isController = $request->session()->get('socialite_callback') === 'from_controller';
     
        if (!$isController) {
            return redirect('/');
        }

        if (Auth::check()) {
            return redirect('/');
        }

        $code = request()->get('code');

        if(request()->get('error') == 'access_denied') {
            return redirect()->route('login')->with('error', trans('vaultaid::web.flash.auth.error.declined'));
        }

        if ($code == null) {
            return redirect()->route('login')->with('error', trans('vaultaid::web.flash.auth.error.no_code'));
        }

        $response = Http::withHeader('Accept','application/json')->post('https://vaultaid.aktech.fr/api/v1/oauth/token', [
            'grant_type' => 'authorization_code',
            'client_id' => setting('vaultaid.client_id'),
            'client_secret' => setting('vaultaid.client_secret'),
            'redirect_uri' => (setting('vaultaid.redirect_uri') == '' ? config('app.url') . "/vaultaid/callback" : setting('vaultaid.redirect_uri')),
            'code' => $code,
        ]);


        $response = json_decode($response->body());

        if (isset($response->errors)) {
            return redirect()->route('login')->with('error', trans('vaultaid::web.flash.auth.error.server_err'));
        }

        $user = Http::withToken($response->access_token)->get('https://vaultaid.aktech.fr/api/v1/user/me')->json();


        if (isset($user['error'])) {
            return redirect()->route('login')->with('error', trans('vaultaid::web.flash.auth.error.server_err'));
        }


        $azuriomUser = \Azuriom\Models\User::where('email', $user['email'])->first();

        if ($azuriomUser == null) {
            $azuriomUser = \Azuriom\Models\User::create([
                'name' => $user['info']['username'],
                'email' => $user['email'],
                'password' => Hash::make(Str::random(32)),
                'avatar' => $user['info']['avatar'] ?? null,
                'last_login_ip' => request()->ip(),
                'last_login_at' => now(),
            ]);
        } else {

            if ($azuriomUser->isBanned()) {
                return redirect()->route('login')->with('error', trans('vaultaid::web.flash.auth.error.banned'));
            }

            if (setting('app.maintenance', false) && !$azuriomUser->can('maintenance.access')) {
                return redirect()->route('login')->with('error', trans('vaultaid::web.flash.auth.error.maintenance'));
            }

            $azuriomUser->update([
                'name' => $user['info']['username'],
                'avatar' => $user['info']['avatar'] ?? null,
            ]);
        }

        Auth::login($azuriomUser);

        return redirect()->route('home')->with('success', trans('vaultaid::web.flash.auth.success.login'));
    }
}
