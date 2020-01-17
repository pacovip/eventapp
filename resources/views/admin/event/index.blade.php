@extends('admin.layouts.app')

@section('page_title')
    {{ env('APP_NAME') }} / Events
@stop

@section('content_title')
    Event <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"> </small>
@stop

@section('content_breadcrumb')
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item" aria-current="page">
        <a class="link-fx" href="">Events</a>
    </li>
@stop

@section('content')
    
    <!-- Page Content -->
    <div class="content">
        <!-- Categories -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Events List</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <!-- Intro Category -->
                <table class="table table-striped table-borderless table-vcenter push">
                    <thead class="border-bottom">
                        <tr>                            
                            <th class="d-none d-md-table-cell text-center">Type</th>
                            <th class="d-none d-md-table-cell text-center">City</th>
                            <th class="d-none d-md-table-cell text-center">Town</th>
                            <th class="d-none d-md-table-cell text-center">District</th>
                            
                            <th class="d-none d-md-table-cell text-center">name</th>
                            <th class="d-none d-md-table-cell text-center">Description</th>
                            <th class="d-none d-md-table-cell text-center">Date</th>
                            <th class="d-none d-md-table-cell text-center">Created at</th>
                            <th class="d-none d-md-table-cell text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if( count($events)>0 )
                            @foreach($events as $event)
                                @foreach($event['data'] as $dt)        
                                    <tr>
                                        <td class="d-none d-md-table-cell text-center">{{$dt['type']['name']}}</td>
                                        <td class="d-none d-md-table-cell text-center">{{$dt['city']['name']}}</td>
                                        <td class="d-none d-md-table-cell text-center">{{$dt['town']['name']}}</td>
                                        <td class="d-none d-md-table-cell text-center">{{$dt['district']['name']}}</td>

                                        <td class="d-none d-md-table-cell text-center">{{$dt['name']}}</td>
                                        <td class="d-none d-md-table-cell text-center">{{substr($dt['description'],0,60)}} ...</td>
                                        <td class="d-none d-md-table-cell text-center">{{$dt['date']}}</td>
                                        <td class="d-none d-md-table-cell text-center">{{$dt['created_at']}}</td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="btn btn-primary text-white">btn</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9" class="d-none d-md-table-cell text-center"><i class="alert alert-info">Aucun évènement disponible !</i></td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <!-- END Intro Category -->

            </div>
        </div>
        <!-- END Categories -->
    </div>
    <!-- END Page Content -->
@endsection
