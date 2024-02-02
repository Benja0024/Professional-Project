@extends('admin.base')

@section('title','Login')

@section('content')
    <div class="fix-wrapper">
	<div class="container">
		<div class="row justify-content-center">
				<div class="col-lg-5 col-md-6">
    <div class="card mb-0 h-auto">
        <div class="card-body">
            <div class="text-center mb-3">
                <a href="https://jobick.dexignlab.com/cakephp/demo"><img class="logo-auth" src="../images/logo-full.png" alt=""></a>
            </div>
            <h4 class="text-center mb-4">Sign in your account</h4>
            <form action="https://jobick.dexignlab.com/cakephp/demo">
                <div class="form-group mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" class="form-control" placeholder="Enter username" id="username">
                </div>
                <div class="mb-sm-4 mb-3 position-relative">
                    <label class="form-label" for="dlab-password">Password</label>
                    <input type="password" id="dlab-password" class="form-control" value="123456">
                    <span class="show-pass eye">
                        <i class="fa fa-eye-slash"></i>
                        <i class="fa fa-eye"></i>
                    </span>
                </div>
                <div class="form-row d-flex flex-wrap justify-content-between mb-2">
                    <div class="form-group mb-sm-4 mb-1">
                        <div class="form-check custom-checkbox ms-1">
                            <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                            <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
                        </div>
                    </div>
                    <div class="form-group ms-2">
                        <a class="text-hover" href="page-forgot-password.html">Forgot Password?</a>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
            </div>
        </div>
    </div>
</div>		</div>
	</div>
</div>
	
@endsection