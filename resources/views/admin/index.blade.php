@extends('admin.layouts.app')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Home <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"> </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Home</li>                        
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Categories -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Page title</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <p class="font-size-sm text-muted">
                    Page content...
                </p>
            </div>
        </div>
        <!-- END Categories -->
    </div>
    <!-- END Page Content -->
@endsection
