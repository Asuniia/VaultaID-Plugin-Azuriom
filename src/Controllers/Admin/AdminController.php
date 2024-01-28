<?php

namespace Azuriom\Plugin\Vaultaid\Controllers\Admin;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Models\Setting;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function show()
    {

        return view('vaultaid::admin.index', [
            'client_id' => setting('vaultaid.client_id', ''),
            'client_secret' => setting('vaultaid.client_secret', ''),
            'redirect_uri' => setting('vaultaid.redirect_uri', ''),
            'scopes' => [
                ['id' => 'email', 'name' => trans('vaultaid::admin.scopes.email')],
                ['id' => 'name', 'name' => trans('vaultaid::admin.scopes.name')],
                ['id' => 'firstname', 'name' => trans('vaultaid::admin.scopes.firstname')],
                ['id' => 'username', 'name' => trans('vaultaid::admin.scopes.username')],
                ['id' => 'phone', 'name' => trans('vaultaid::admin.scopes.phone')],
                ['id' => 'organization', 'name' => trans('vaultaid::admin.scopes.organization')],
                ['id' => 'newsletter', 'name' => trans('vaultaid::admin.scopes.receive_email')],
                ['id' => 'verified', 'name' => trans('vaultaid::admin.scopes.verified')],
                ['id' => 'date_created', 'name' => trans('vaultaid::admin.scopes.date_created')],
                ['id' => 'date_updated', 'name' => trans('vaultaid::admin.scopes.date_updated')],
                ['id' => 'avatar', 'name' => trans('vaultaid::admin.scopes.avatar')],
            ],
            'enable_vaultaid' => setting('vaultaid.enable_vaultaid', false),
            'enable_script' => setting('vaultaid.enable_script', false),
            'button_class' => setting('vaultaid.button_class', ''),
            'selected_scopes' => json_decode(setting('vaultaid.scopes', '[]')),
        ]);
    }

    public function save(Request $request)
    {
        $validated = $this->validate($request, [
            'client_id' => ['required', 'string', 'max:255'],
            'client_secret' => ['required', 'string', 'max:255'],
            'redirect_uri' => ['nullable', 'string', 'max:255'],
            'scopes' => ['required', 'array'],
            'enable_script' => ['required', 'boolean'],
            'enable_vaultaid' => ['required', 'boolean'],
            'button_class' => ['nullable', 'string', 'max:255'],
        ]);

        Setting::updateSettings([
            'vaultaid.client_id' => $validated['client_id'],
            'vaultaid.client_secret' => $validated['client_secret'],
            'vaultaid.redirect_uri' => $validated['redirect_uri'],
            'vaultaid.enable_script' => $validated['enable_script'],
            'vaultaid.enable_vaultaid' => $validated['enable_vaultaid'],
            'vaultaid.button_class' => $validated['button_class'],
            'vaultaid.scopes' => json_encode(array_filter($validated['scopes'])),
        ]);

        return redirect()->route('vaultaid.admin.settings')->with('success', trans('vaultaid::admin.flash.settings.success'));
    }
}
