@extends('admin.layouts.app')


@section('page_title')
    {{ env('APP_NAME') }} Admin / États
@stop


@section('content_title')
    États <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"> : Aperçu </small>
@stop


@section('content_breadcrumb')
    <li class="breadcrumb-item" aria-current="page">
        <a class="link-fx" href="">Accueil</a>
    </li>
    <li class="breadcrumb-item" aria-current="page">
        <a class="link-fx" href="{{url('admin/city')}}">États</a>
    </li>
    <li class="breadcrumb-item">Aperçu</li>
@stop

@section('content')    
    <!-- Categories -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Aperçu d'État</h3>            
            <a class="btn bg-green btn-sm btn-primary pull-right" href="{{ route('admin.city.index') }}">
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
                        <th class="" width="180">Nom :</th> <td>{{$city['name']}}</td>
                    </tr>       
                    <tr>
                        <th class="">Description : </th> <td>{{$city['description']}}</td                                >
                    </tr>     
                    <tr>
                        <th class="">Date d'ajout : </th> <td>{{$city['created_at']}}</td                                >
                    </tr>
                </tbody>
            </table>            
        </div>        
    </div>
    <!-- END Intro Category -->
    <!-- Intro button -->
    <div class="row col-md-12">
        <div class="clear clearfix">&nbsp;</div>
        <div class="col-md-3">
            <a class="btn text-primary btn-sm" href="{{ route('admin.city.edit', $city['id'])  }}" title="Modifier">
                <i class="fa fa-edit"></i> Modifier
            </a>
        </div>
        <div class="col-md-3">
            <a class="btn btn-sm text-primary" href="{{url('admin/city')}}"> 
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