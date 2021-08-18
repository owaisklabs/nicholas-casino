<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $url = $_SERVER['REQUEST_URI'];
            $icon;$dash ;
            if(strpos($url,"dashboard")){
                $icon = '../';
                $dash = 'dashboard';
            }else{
                $icon = null;
                $dash = null;
            }
        ?>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Nicholas Casino</title>

            <link rel="shortcut icon" href="{{get_favicon_logo()}}" type="image/x-icon">
            <!-- mainCss -->
            <link rel="stylesheet" href="{{asset('css/main.css')}}">
            <!-- bootstrap -->
            <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
            <!-- owl -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <!-- jquery -->
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <!-- wow -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
            <!-- font-awsom -->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        </head>
<body>
    {{-- nav bar start --}}
    <nav class="navbar navbar-expand-lg fixed-top" id="navbarMain">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#"></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'home') !== false) {echo 'active';} ?>" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'about_us') !== false) {echo 'active';} ?>" href="{{route('about_us')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'deposit.php') !== false) {echo 'active';} ?>" href="javascript:void()">Deposit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'liveChat.php') !== false) {echo 'active';} ?>" href="javascript:void()">Live Chat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'redem.php') !== false) {echo 'active';} ?>" href="javascript:void()">REDEEM YOUR WINNINGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'faq') !== false) {echo 'active';} ?>" href="{{route('faq')}}">FAQ's</a>
                    </li>
                    <li class="nav-item navBtnss">
                        <a class="nav-link btn" href="{{route('web_login')}}">Login</a>
                    </li>
                    <li class="nav-item navBtnss">
                        <a class="nav-link btn" <?php if (stripos($_SERVER['REQUEST_URI'],'faq.php') !== false) {echo 'active';} ?>" href="{{route('web_register')}}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- nav bar end --}}
    <div class="mainDiv my-scrollbar"  data-scrollbar>
        @yield('content')
        {{-- footer start --}}
        <footer class="mt5" >
            <div class="container-xxl ">
              <div class="row ">
                <div class="col-lg-3 ">
                  <a href="{{route('home')}}">
                    <img src="{{get_footer_logo()}}" height="100% " width="100% "alt=" ">
                  </a>
                </div>
                <div class="col-lg-3 ">
                  <div class="fSubMain ">PAGES</div>
                  <div class="fSub "><a href="{{route('home')}}">home</a></div>
                  <div class="fSub "><a href="{{route('about_us')}}">ABOUT</a></div>
                  <div class="fSub "><a href=" javascript:void()">DEPOSIT</a></div>
                  <div class="fSub "><a href=" javascript:void()">LIVE CHAT</a></div>
                  <div class="fSub "><a href="javascript:void() ">REDEEM YOUR WINNINGS</a></div>
                </div>
                <div class="col-lg-3 ">
                  <div class="fSubMain ">QUICK LINKS</div>
                  <div class="fSub "><a href="{{route('condition')}}">TERMS & CONDITION</a></div>
                  <div class="fSub "><a href="{{route('policy')}}">POLICY</a></div>
                  <div class="fSub "><a href="{{route('faq')}}">FAQ’s</a></div>
                </div>
                <div class="col-lg-3 ">
                  <div class="fSubMain ">CONTACT US</div>
                  <div class="fSub d-flex align-items-baseline "><i class="fa fa-phone-alt "></i><a href="tel:{{get_setting_by_key('Contact Number')}} ">{{get_setting_by_key('Contact Number')}}</a></div>
                  <div class="fSub d-flex align-items-baseline "><i class="fa fa-envelope "></i><a href="mailto:{{get_setting_by_key('Email')}} ">{{get_setting_by_key('Email')}}</a></div>
                  <div class="fSub d-flex align-items-baseline ">
                    <i class="fa fa-map-marker-alt "></i>
                    <a href=" javascript:void()">
                     {{get_setting_by_key('Address Line 1')}}<br/>
                     {{get_setting_by_key('Address Line 2')}}
                    </a>
                  </div>
                    <div class="fSub ">
                      <a href="{{get_setting_by_key('Facebook')}}"  target="_blank "><i class="fab fa-facebook-f "></i></a>
                      <a href="{{get_setting_by_key('Instagram')}}" target="_blank "><i class="fab fa-instagram "></i></a>
                    </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-lg-12 text-center rightsCopy ">
                  Copyright © 2021 <a href=" https://designprosusa.com/ " target="_blank ">Design Pros USA.</a> All Rights Reserved
                </div>
              </div>
            </div>
          </footer>



        {{-- footer end --}}
        </div>
        {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.6.1/smooth-scrollbar.js" integrity="sha512-3Csz15JaSnj/L3/crtY2nJ0SJusskVc+wjv6qqC31RKV+JRLnV0kXZhodM+pkOKT71UZjJauQjSJuErMsrro+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.6.1/smooth-scrollbar.min.js" integrity="sha512-UmrYi6FvCoDgKRTzLOvAj/egIrJtoTIQV0u/stO1h5f4DQNcXnhwnY0rel5zduc3CNqO6LfVI8ZaGUKCrLIo7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Anime -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- Wow -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- main -->
    <script src="{{asset('js/main.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script>

      new WOW().init();
    </script>
</body>
</html>
