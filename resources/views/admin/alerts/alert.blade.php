

@if (Session::has('success'))
    <div class="text text-light text-center bg-success">
        {{Session::get('success')}}
    </div>
@endif
@if (Session::has('errorConnection'))
    <div class="text text-light text-center bg-danger">
        {{Session::get('errorConnection')}}
    </div>
@endif
@if (Session::has('password'))
    <div class="text text-light text-center bg-danger">
        {{Session::get('password')}}
    </div>
@endif
@if (Session::has('confirm_password'))
    <div class="text text-light text-center bg-danger">
        {{Session::get('confirm_password')}}
    </div>
@endif