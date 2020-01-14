@extends('layouts.auth')
@section('content')

    <div id="page-container">
        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('{{ asset('src/img/back.jpg--') }}') ; background-position: center;
                background-repeat: no-repeat;
                background-size: cover;">
                <div class="hero-static bg-white-95">
                    <div class="content">
                        <p class="mb-2 text-center">
                            <i class="fa fa-2x fa-circle-notch text-primary"></i>
                        </p>                    
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4">
                                <!-- Sign In Block -->
                                <div class="block block-themed block-fx-shadow mb-0">
                                    <div class="block-header">
                                        <h3 class="block-title text-center">Connexion</h3>
                                        <div class="block-options">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    <a class="btn-block-option font-size-sm" href="{{ route('password.request') }}">{{ __('Mot de passe oublié ?') }}</a>
                                                    
                                                </a>
                                            @endif                                            
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <div class="p-sm-3 px-lg-4 py-lg-5">
                                            <h1 class="mb-2">Event App</h1>
                                            <p>Connectez-vous.</p>

                                            <!-- Sign In Form -->
                                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                            <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                                @csrf
                                                <div class="py-3">
                                                    <div class="form-group">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                                               name="email" placeholder="{{ __('E-Mail') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                                               name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Se souvenir de moi') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6 col-xl-7">
                                                        <button type="submit" class="btn btn-block btn-primary">
                                                             Connecté
                                                        </button>
                                                    </div>
                                                    <div class="col-md-6 col-xl-5 text-left">
                                                           <a href="{{url('register')}}">S'enregistrer</a>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END Sign In Form -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END Sign In Block -->
                            </div>
                        </div>
                    </div>
                    <div class="content content-full font-size-sm text-muted text-center">
                        <strong></strong>  <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
@endsection

