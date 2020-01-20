@extends('admin.layouts.app')

@section('page_title')
    {{ env('APP_NAME') }} Admin / Gestionnaires
@stop

@section('content_title')
    Gestionnaires <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"> </small>
@stop

@section('content_breadcrumb')
    <li class="breadcrumb-item">
         <a class="link-fx" href="{{ url('admin/') }}">Accueil</a>
    </li>
    <li class="breadcrumb-item" aria-current="page">
        <a class="link-fx" href="{{ route('admin.account.index') }}">Gestionnaires</a>
    </li>
    <li class="breadcrumb-item">Modifier</li>
@stop

@section('content')    
    <!-- Categories -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Modifier un Gestionnaire</h3>
            <a class="btn bg-green btn-sm btn-primary pull-right" href="{{ route('admin.account.index') }}"><i class="fa fa-chevron-left"></i> Retour</a>
            
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                   <i class="si si-refresh"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <!-- Intro block-content -->
            {{ Form::model($account, ['method' => 'put', 'url'=>route('admin.account.update', $account['id'])]) }}
                
                @include('admin.inc.errors')
                
                <div class="col-md-12" style="padding: 0;">
                    <div class="col-md-4 form-group">
                        {{ Form::label('name', "Nom du gestionnaire ") }}
                        {{ Form::text('name', null, ['class'=>'form-control','required'=>'required']) }}
                    </div>

                    <div class="col-md-4 form-group">
                        {{ Form::label('email', "Email") }}
                        {{ Form::email('email', null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-4 form-group">
                        {{ Form::label('password', "Mot de passe") }}
                        <input type="password" id="password" name="password" class="form-control">                        
                    </div>
                </div>
                <div class="col-md-7 form-group bottom-action-btn" style="margin-top: 40px;">
                    <button class="btn btn-primary" style="margin-right: 20px;"> &nbsp; Valider &nbsp; </button>
                    <a href="{{ url('/admin/account') }}" class="btn btn-dark">Annuler</a>
                </div>
            {!!  Form::close() !!}
            <!-- END Intro block-content -->
            
        </div>
    </div>
    <!-- END Categories -->
@endsection
