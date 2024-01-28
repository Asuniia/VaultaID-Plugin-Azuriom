                    @plugin('vaultaid') {{-- if plugin vaultaid is enabled --}}
                        @guest  {{-- if user is not authenticated --}}


                        @if(setting('vaultaid.enable_vaultaid'))
                        @if(setting('vaultaid.enable_script'))
                        @push('footer-scripts')
                        <script src="https://vaultaid.aktech.fr/assets/vaultaid.js" defer></script>
                        @endpush

                        <div id="vaultaid-button" @if(setting('vaultaid.button_class')) data-vcustom-css-class="{{ setting('vaultaid.button_class') }}" @endif data-vclient-id="{{ setting('vaultaid.client_id') }}" data-vscope="{{ implode(" ", json_decode(setting('vaultaid.scopes', '[]'))) }}" data-vreturn-uri="{{ (setting('vaultaid.redirect_uri') == '' ? urlencode(config('app.url') . "/vaultaid/callback") : setting('vaultaid.redirect_uri')) }}"></div>

                        @else
                        <div class="my-2">
                            <a href="{{ route('vaultaid.redirect') }}" class="btn btn-primary d-block">
                                Continuer avec VaultaID
                            </a>
                        </div>
                        @endif
                        @endif
                        @endguest
                    @endplugin
