
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="National Specialist Database">
    <meta name="robots" content="index, follow" />
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="loginMain" style="background:url({{asset('img/1x/signup.jpg')}}) no-repeat right 0px / cover;">
        <div class="row ">

            <div class="col-lg-3 col-md-8 col-sm-10 col-xs-10 text-center signupDin">
                <div class="logo text-center wow fadeInRight"  data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <a href="{{route('home')}}">
                        <img src="{{asset('img/1x/logo.png')}}" height="" width="" alt="">
                    </a>
                </div>
                <h1 class=" mt-40 wow flipInX" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    Forgot Password,
                </h1>
                <!-- <div class="useEmail mt-40  wow flipInY" data-wow-delay="1.5s" data-wow-duration="1.5s">
                    Use your email to Reset Password
                </div> -->
                <!-- div class="nameInp mt-20">
                    <input type="text" placeholder="Email" name="email" class="wow zoomIn" data-wow-delay="2s" data-wow-duration="1.5s">
                </div> -->
                <div class="nameInp mt-50 text-left">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <!-- <div class="form-group row">
                          <div class="col-md-6"> -->
                            <input id="email" type="email" class=" @error('email') is-invalid @enderror wow zoomIn" name="email" value="{{ old('email') }}" required autocomplete="email" data-wow-delay="2s" data-wow-duration="1.5s" autofocus placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                       <!--  </div>
                       </div> -->

                       <div class="form-group row mb-5">
                        <div class="col-md-12 offset-md-4">
                            <button type="submit" class="wow fadeInUp" data-wow-delay="3.5s" data-wow-duration="1.5s">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
            </div>
        </div>
    </div>
</div>

<!-- owl carosal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous"></script>
<script>
 new WOW().init();
</script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>
<script>
 $('.owl-carousel').owlCarousel({
     loop:true,
     margin:20,
     nav:true,
     dots: false,
     responsive:{
         0:{
             items:1
         },
         600:{
             items:1
         },
         1000:{
             items:3
         },
         2000:{
             items:5
         }
     }
 })
</script>
<noscript>Your browser does not support JavaScript!</noscript>
</body>
</html>
