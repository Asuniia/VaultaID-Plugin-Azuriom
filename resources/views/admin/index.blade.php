@extends('admin.layouts.admin')

@section('title', trans('vaultaid::admin.settings.title'))

<!DOCTYPE html>

@section('content')
<h6 class="mb-0">{{ trans('vaultaid::admin.settings.subtitle') }}</h6>
<div class="row">
    <div class="my-3">
        <div class="my-3">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="card-header">
                        <h4 class="mb-0">{{ trans('vaultaid::admin.settings.header') }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vaultaid.admin.settings.save') }}" method="POST">
                            @csrf

                            <div class="col my-3">

                                <div>
                                    <p>{{ trans('vaultaid::admin.settings.info') }}</p>
                                    <div class="alert alert-warning">
                                        {{ trans('vaultaid::admin.settings.evolution') }}
                                      </div>
                                </div>

                                <div>
                                    <a type="button" href="https://forms.gle/soLQfTeaCqeivPJ87" target="_blank" class="btn btn-info">
                                        <i class="bi bi-key"></i> {{ trans('vaultaid::admin.settings.request') }}
                                    </a>
                                </div>

                            </div>

                            <div class="row my-3">
                                <div class="col-md-6 form-group">
                                    <label for="client_id">{{ trans('vaultaid::admin.settings.client_id') }}</label>
                                    <input class="form-control" id="client_id" placeholder="{{ trans('vaultaid::admin.settings.client_id_placeholder') }}" name="client_id" value="{{ $client_id }}" required="required">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="client_secret">{{ trans('vaultaid::admin.settings.client_secret') }}</label>
                                    <input class="form-control" placeholder="{{ trans('vaultaid::admin.settings.client_secret_placeholder') }}" type="password" id="client_secret" name="client_secret" value="{{ $client_secret }}" required="required">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-6 form-group">
                                    <label for="client_id">{{ trans('vaultaid::admin.settings.redirect_uri') }}</label>
                                    <input class="form-control" id="redirect_uri" placeholder="{{ trans('vaultaid::admin.settings.redirect_uri_placeholder') }}" name="redirect_uri" value="{{ $redirect_uri }}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="client_secret">{{ trans('vaultaid::admin.settings.scopes') }}</label>
                                    <select class="form-control" name="scopes[]" id="scopes[]" multiple="multiple" required="required">
                                        @foreach($scopes as $scope)
                                            <option value="{{ $scope['id'] }}" {{ in_array($scope['id'], $selected_scopes) ? 'selected' : '' }}>{{ $scope['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="form-group">
                                    <label for="button_class">{{ trans('vaultaid::admin.settings.button_class') }}</label>
                                    <input class="form-control" id="button_class" placeholder="{{ trans('vaultaid::admin.settings.button_class_placeholder') }}" name="button_class" value="{{ $button_class }}">
                                </div>
                            </div>
                                <div class="col-md-12 my-3 form-group">
                                <input type="hidden" name="enable_script" value="0">
                                <input type="checkbox" class="form-check-input" id="enable_script" name="enable_script" value="1" @if(setting('vaultaid.enable_script') === '1') checked @endif>
                                <label class="form-check-label" for="enable_script">
                                    {{ trans('vaultaid::admin.settings.enable_script') }}
                                </label>
                            </div>
                            <div class="col-md-12 my-3 form-group">
                                <input type="hidden" name="enable_vaultaid" value="0">
                                <input type="checkbox" class="form-check-input" id="enable_vaultaid" name="enable_vaultaid" value="1" @if(setting('vaultaid.enable_vaultaid') === '1') checked @endif>
                                <label class="form-check-label" for="enable_vaultaid">
                                    {{ trans('vaultaid::admin.settings.enable_vaultaid') }}
                                </label>
                            </div>
                            <div class="my-3">
                            <a class="m-0 font-weight-bold text-primary" target="_blank" rel="noopener noreferrer" href="https://discord.gg/fp3vUxYUpA">{{ trans('vaultaid::admin.settings.social_discord') }}</a>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
