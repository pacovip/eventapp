@extends('admin.layouts.app')


@section('page_title')
    {{ env('APP_NAME') }} Admin / Comptes utilisateur
@stop


@section('content_title')
    Comptes utilisateur <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"> : Aperçu </small>
@stop


@section('content_breadcrumb')
    <li class="breadcrumb-item" aria-current="page">
        <a class="link-fx" href="">Accueil</a>
    </li>
    <li class="breadcrumb-item" aria-current="page">
        <a class="link-fx" href="{{url('admin/user')}}">Comptes utilisateur</a>
    </li>
    <li class="breadcrumb-item">Aperçu</li>
@stop

@section('content')    
    <!-- Categories -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Aperçu du Compte</h3>            
            <a class="btn bg-green btn-sm btn-primary pull-right" href="{{ route('admin.user.index') }}">
                <i class="fa fa-chevron-left"></i> Retour
            </a>
            
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
                <tbody>
                    <tr>
                        <th class="">Nom :</th> <td>{{$user['firstname']}}</td>
                    </tr>       
                    <tr>
                        <th class="">Prénom : </th> <td>{{$user['lastname']}}</td                                >
                    </tr>     
                    <tr>
                        <th class="">Date de naissance : </th> <td>{{$user['birthdate']}}</td                                >
                    </tr>
                    <tr>
                        <th class="">Civilité :</th> <td>{{$user['sex']}}</td>
                    </tr>       
                    <tr>
                        <th class="">Téléphone : </th> <td>{{$user['phone']}}</td                                >
                    </tr>    
                    <tr>
                        <th class="">Email : </th> <td>{{$user['email']}}</td                                >
                    </tr>     
                    <tr>
                        <th class="">Date de création : </th> <td>{{$user['created_at']}}</td                                >
                    </tr>
                </tbody>
            </table>            
        </div>
        <div class="block-content">            
            <h3 class="block-title">Évènement(s) publié(s)</h3>
            <!-- Intro Event -->
            <table class="table table-striped table-borderless table-vcenter push table-hover table-responsive" style="font-size:13px; ">
                @if( count($user['events'])>0 )
                <thead class="border-bottom border-top">
                    <tr>                            
                        <th class="">État</th>
                        <th class="">Ville</th>
                        <th class="">District</th>

                        <th class="">Type</th>
                        <th class="">Titre</th>
                        <th class="">Date</th>
                        <th class="">Créer le</th>
                    </tr>
                </thead>
                <tbody>                    
                    @foreach($user['events'] as $dt)        
                        @if( $dt['status']=='1' ) 
                        <tr class="text-success">
                        @else 
                        <tr class="text-warning">
                        @endif

                            <td>{{$dt['city']['name']}}</td>
                            <td>{{$dt['town']['name']}}</td>
                            <td>{{$dt['district']['name']}}</td>

                            <td>{{$dt['type']['name']}}</td>
                            <td>{{$dt['name']}}</td>
                            <td>{{$dt['date']}}</td>
                            <td>{{$dt['created_at']}}</td>
                        </tr>
                    @endforeach                    
                </tbody>
                @else
                    <tr>
                        <td><i class="alert alert-info">Cet utilisateur n'a publié aucun évènement !</i></td>
                    </tr>
                @endif
            </table>
            <!-- END Intro Event -->
        </div>
    </div>
    <!-- END Intro Category -->
    <!-- Intro button -->
    <div class="row col-md-12">
        <div class="clear clearfix">&nbsp;</div>
        <!--<div class="col-md-3">
            <a class="btn text-primary btn-sm" href="{{ route('admin.user.edit', $user['id'])  }}" title="Modifier">
                <i class="fa fa-edit"></i> Modifier
            </a>
        </div>-->
        <div class="col-md-3">
            <a class="btn btn-sm text-primary" href="{{url('admin/user')}}"> 
                <i class="fa fa-chevron-left"></i> Retour
            </a>
        </div>
    </div>
    <!-- END Intro button -->    
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