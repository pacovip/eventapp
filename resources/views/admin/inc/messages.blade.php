@if(Session::has('message'))
    <div style="font-size:16px;" class="alert text-green text-success text-center bg-green-light text-temporaire col-md-12"> 
        <i class="fa fa-info-circle"></i> &nbsp; 
        {{ Session::get('message') }} 
    </div>
@endif

@if(Session::has('error'))
  <div class="alert text-red text-warning text-center bg-gray temporaire col-md-12"> 
        <h4 style="font-weight: 300;">
            <i class="fa fa-info-circle"></i> &nbsp;  {{ Session::get('error') }} 
        </h4>
  </div>
@endif