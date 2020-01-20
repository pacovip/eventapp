@extends('admin.layouts.app')


@section('page_title')
    {{ env('APP_NAME') }} Admin / Comptes utilisateur
@stop


@section('content_title')
    Comptes utilisateur <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"> </small>
@stop


@section('content_breadcrumb')
    <li class="breadcrumb-item" aria-current="page">
        <a class="link-fx" href="">Accueil</a>
    </li>
    <li class="breadcrumb-item">Comptes utilisateur</li>
@stop

@section('content')    
    <!-- Categories -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Liste des Comptes utilisateur</h3>            
            <!--<a class="btn bg-green btn-sm btn-primary pull-right" href="{{ route('admin.user.create') }}">
                <i class="fa fa-plus"></i> Ajouter
            </a>-->
            
            <div class="block-options">                
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            @include('admin.inc.messages')
            <!-- Intro Category -->
            <table class="table table-striped table-borderless table-vcenter push table-hover" style="font-size:13px;">
                <thead class="border-bottom border-top">
                    <tr>                            
                        <th class="">Nom</th>
                        <th class="">Prénom</th>
                        <th class="">Date de naissance</th>
                        <th class="">Civilité</th>
                        <th class="">Téléphone</th>
                        <th class="">Email</th>
                        <th class="text-center" width="30">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if( count($users)>0 )
                        @foreach($users as $dt)        
                            <tr>
                                <td>{{$dt['firstname']}}</td>
                                <td>{{$dt['lastname']}}</td>
                                <td>{{$dt['birthdate']}}</td>
                                <td>{{$dt['sex']}}</td>
                                <td>{{$dt['phone']}}</td>
                                <td>{{$dt['email']}}</td>
                                <td>
                                    <a class="btn text-success btn-sm btn-default" href="{{ route('admin.user.show', $dt['id'])  }}" title="Aperçu"><i class="fa fa-search-plus"></i></a>
                                    <!--<a class="btn text-primary btn-sm btn-default" href="{{ route('admin.user.edit', $dt['id'])  }}" title="Modifier"><i class="fa fa-edit"></i></a>
                                    <a class="btn text-danger  btn-sm btn-default btn-delete-line" style="cursor:pointer;" ref="{{ route('admin.user.delete', $dt['id']) }}" title="Supprimer"><i class="fa fa-trash"></i></a>-->
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3" class="d-none d-md-table-cell text-center"><i class="alert alert-info">Aucun Compte disponible !</i></td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <!-- END Intro Category -->

        </div>
    </div>
    <!-- END Categories -->
@endsection


@section('others_css')
    <!-- popupmodal css plugin-->
    <link href="{{ asset('src/js/plugins/popupmodal.js-master/css/popupmodal.css') }}" rel="stylesheet">
@stop

@section('others_js')
    <!-- popupmodal js plugin-->    
    <script src="{{ asset('src/js/plugins/popupmodal.js-master/js/polyfill.js') }}"></script>
    <script src="{{ asset('src/js/plugins/popupmodal.js-master/js/popupmodal-min.js') }}"></script>
@stop