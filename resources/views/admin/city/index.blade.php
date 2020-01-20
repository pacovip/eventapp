@extends('admin.layouts.app')


@section('page_title')
    {{ env('APP_NAME') }} Admin / États
@stop


@section('content_title')
    États <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"> </small>
@stop


@section('content_breadcrumb')
    <li class="breadcrumb-item" aria-current="page">
        <a class="link-fx" href="">Accueil</a>
    </li>
    <li class="breadcrumb-item">États</li>
@stop

@section('content')    
    <!-- Categories -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Liste des États</h3>            
            <a class="btn bg-green btn-sm btn-primary pull-right" href="{{ route('admin.city.create') }}">
                <i class="fa fa-plus"></i> Ajouter
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
                <thead class="border-bottom border-top">
                    <tr>                            
                        <th class="">Nom</th>
                        <th class="">Description</th>
                        <th class="text-center" width="130">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if( count($cities)>0 )
                        @foreach($cities as $dt)        
                            <tr>
                                <td>{{$dt['name']}}</td>
                                <td>{{$dt['description']}}</td>
                                <td>
                                    <a class="btn text-success btn-sm btn-default" href="{{ route('admin.city.show', $dt['id'])  }}" title="Aperçu"><i class="fa fa-search-plus"></i></a>
                                    <a class="btn text-primary btn-sm btn-default" href="{{ route('admin.city.edit', $dt['id'])  }}" title="Modifier"><i class="fa fa-edit"></i></a>
                                    <a class="btn text-danger  btn-sm btn-default btn-delete-line" style="cursor:pointer;" ref="{{ route('admin.city.delete', $dt['id']) }}" title="Supprimer"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3" class="d-none d-md-table-cell text-center"><i class="alert alert-info">Aucun État disponible !</i></td>
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