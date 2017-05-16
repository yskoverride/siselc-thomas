@extends('layouts.login')

@section('content')

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombres</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                            <label for="lastName" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        
                        <div class="form-group{{ $errors->has('DocIdentidad') ? ' has-error' : '' }}">
                            <label for="DocIdentidad" class="col-md-4 control-label">Doc. Identidad</label>

                            <div class="col-md-6">
                                <input id="DocIdentidad" type="text" class="form-control" name="DocIdentidad" value="{{ old('DocIdentidad') }}" required autofocus>

                                @if ($errors->has('DocIdentidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DocIdentidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                          

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" data-container="body" data-toggle="popover" data-placement="right" data-content="Le sera enviado un correo de confirmación para iniciar sesión." required/>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email-confirm" class="col-md-4 control-label">Confirmar email</label>

                            <div class="col-md-6">
                                <input id="email-confirm" type="email" class="form-control" name="email_confirmation" required>
                            </div>
                        </div>                       

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" data-container="body" data-toggle="popover" data-placement="right" data-content="El password debe contener al menos 8 caracteres incluyendo minúsculas, mayúsculas, caracteres numéricos y especiales." autocomplete="off" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="politica" {{ old('remember') ? 'checked' : '' }} required> Acepto politica manejo de información
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear Cuenta
                                </button>
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    Iniciar Sesión?
                                </a>                                
                            </div>
                        </div>
                    </form>
@endsection
