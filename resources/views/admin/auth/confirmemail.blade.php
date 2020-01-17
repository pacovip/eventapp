@extends('admin.layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">&nbsp</div>
                <h3 class="text-success">Votre compte a été enregistré avec succès !</h3>
                
                <div class="card-header">&nbsp</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        {{ __('Un lien de vérification a été envoyé dans votre boîte Email, veuillez le consulter pour confirmer votre inscription.') }}
                    </div>

                    {{ __('Si vous ne voyer pas le message vérifiez vos spam ') }}
                    <form class="d-inline" method="POST" action="{{ route('confirmemail', compact('data')) }}">
                        @csrf
		                <!-- ou, <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clicker ici pour envoyer à nouveau') }}</button>.-->
	                </form>
                    <h1>&nbsp;</h1>
                    <p><a href="./" class="btn btn-link p-0 m-0 align-baseline">{{ __('Retour à l\'accueil') }}</a></p>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
