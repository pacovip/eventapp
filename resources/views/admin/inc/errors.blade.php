@if($errors->any())
    <div class="form-group col-md-12">
        <ul  style="margin: 0px;padding: 0px;">
            @foreach($errors->all() as $error)
                <li class="alert alert-danger"> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif