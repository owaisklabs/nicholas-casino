@extends('web.layouts.master')

@section('content')
<div class="signup-main">
    <!-- <div class="signup-banner">
      <h1>SIGN UP</h1>
    </div> -->
    <div class="col-lg-12 text-center">
      <h1>SIGN UP</h1>
    </div>
    <div class="signup-content">
      <form class="signup-form" action="{{ route('register') }}" method="POST">
          @csrf
        <div class="profile-input mb-3 col-lg-12">
          <p class="profile-input-placeholder" id="profile-placeholder">Profile picture for face identity</p>
          <button class="profile-upload-button" type="button" >UPLOAD</button>
          <input type="file" class="fileProf" hidden>
        </div>
        <div class="mb-3 col-lg-12">
          <input type="text" class="form-control "  aria-describedby="emailHelp" placeholder="First Name">
        </div>
        <div class="mb-3 col-lg-12">
          <input type="text" class="form-control "  aria-describedby="emailHelp" placeholder="Last Name">
        </div>
        <div class="mb-3 col-lg-12">
          <input type="email" class="form-control "  aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="mb-3 col-lg-12">
          <input type="password" class="form-control"  placeholder="Password">
        </div>
        <div class="mb-3 col-lg-12">
          <input type="password" class="form-control"  placeholder="Confirm Password">
        </div>
        <div class="col-lg-12">
          <label class="containerCS d-flex">
            <span>
              I agree with all <a href="">Terms & Conditions</a> and <a href="">Privacy Policy</a>
            </span>
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="col-lg-12 text-center">
          <button type="submit" class="btn btn-primary mt2 mb1 border-0 ">SIGNUP</button>
          <div>
            <label class="already-account-lable">
            <span> Already have an account? <a href="{{route('web_login')}}">Click Here</a></span>
            </label>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
