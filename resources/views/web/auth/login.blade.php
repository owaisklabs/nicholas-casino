@extends('web.layouts.master')
@section('content')

<div class="login-main">
    <div class="login-banner">
        <h1>LOG IN</h1>
</div>
<div class="login-content">
<form class="login-form" action="{{route('web_login')}}" method="POST">
    @csrf
<div class="mb-4 col-lg-4 col-md-4 col-sm-12 login-email-pt">
<input name ="email" type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
</div>
<div class="mb-4 col-lg-4 col-md-4 col-sm-12 login-password-pt">
<input  name ="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<button type="submit" class="btn btn-primary border-0">LOGIN</button>
<a href="forget.php">Forget Password</a>
</form>
</div>
@endsection
