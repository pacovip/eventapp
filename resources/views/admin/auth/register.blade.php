@extends('admin.layouts.auth')
@section('content')
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="hero-static d-flex align-items-center">
                <div class="w-100">
                    <!-- Sign Up Section -->
                    <div class="content content-full bg-white">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                <!-- Header -->
                                <div class="text-center">
                                    <p class="mb-2">
                                        <i class="fa fa-2x fa-circle-notch text-primary"></i>
                                    </p>
                                    <h1 class="h4  mb-1">
                                        Créer un compte
                                    </h1>
                                    <h2 class="h6 font-w400 text-muted mb-3">
                                        @if (isset($message))
                                        <span style="color:red;" role="alert">
                                            <i class="fa fa-warning"></i> {{ $message }}
                                        </span>
                                        @endif
                                    </h2>
                                </div>
                                <!-- END Header -->

                                <!-- Sign Up Form -->
                                <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signup" action="{{ url('register') }}" method="POST">
                                    @csrf
                                    <div class="py-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg form-control-alt @error('firstname') is-invalid @enderror"
                                                   id="signup-firstname" name="{{__('firstname')}}" placeholder="Nom" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                            @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg form-control-alt @error('lastname') is-invalid @enderror"
                                                   id="signup-lastname" name="{{__('lastname')}}" placeholder="Prénom" value="{{ old('lastname') }}" required autocomplete="lastname">
                                            @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <select  class="form-control form-control-lg form-control-alt @error('sex') is-invalid @enderror"
                                                   id="signup-sex" name="{{__('sex')}}" value="{{ old('sex') }}" required autocomplete="sex">
                                                <option value="">Sexe</option>
                                                <option value="Homme">Homme</option>
                                                <option value="Femme">Femme</option>
                                            </select>                                            
                                            @error('sex')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>                                                                           
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg form-control-alt @error('birthdate') is-invalid @enderror"
                                                   id="signup-birthdate" name="{{__('birthdate')}}" placeholder="Date de naissance" value="{{ old('birthdate') }}"  data-inputmask="\'alias\': \'dd/mm/yyyy\'" data-mask="data-mask" autocomplete="birthdate">
                                            @error('birthdate')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg form-control-alt @error('phone') is-invalid @enderror"
                                                   id="signup-phone" name="{{__('phone')}}" placeholder="Contact" value="{{ old('phone') }}" autocomplete="phone">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" id="signup-email"
                                                   name="email" placeholder="{{__('E-mail Address')}}" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" id="signup-password"
                                                   name="password" placeholder="{{__('Password')}}" value="{{ old('password') }}" required autocomplete="password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password-confirm"
                                                   name="password_confirmation" placeholder="{{__('Confirm Password')}}" required autocomplete="new-password">

                                        </div>
                                        <div class="form-group">
                                            <div class="d-md-flex align-items-md-center justify-content-md-between">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="signup-terms" required name="signup-terms">
                                                    <label class="custom-control-label font-w100" for="signup-terms" style="font-size:12px; padding-top: 4px;">Je confirme avoir lu et accepte les <a href="#" target="_blank">Terms &amp; Conditions</a> !</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-center mb-0">
                                        <div class="col-md-10">
                                            <button type="submit" class="btn btn-block btn-primary">
                                                <i class="fa fa-fw fa-plus mr-1"></i> Valider
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: 20px">                                        
                                        <div class="col-md-12  mb-0" style="text-align: center;">
                                            <small class="">
                                                Vous êtes déjà membre ? 
                                                <a class="font-size-sm" href="{{url('login')}}" data-toggle="modal" data-target="#one-signup-terms">
                                                    Connectez-vous !</a>
                                            </small>
                                            
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign Up Form -->
                            </div>
                        </div>
                    </div>
                    <!-- END Sign Up Section -->

                    <!-- Footer -->
                    <div class="font-size-sm text-center text-muted py-3">
                        <strong> </strong>  <span data-toggle="year-copy"></span>
                    </div>
                    <!-- END Footer -->
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Terms Modal -->
    <div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Terms &amp; Conditions</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-sm btn-link mr-2" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">I Agree</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



{{--

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

--}}
