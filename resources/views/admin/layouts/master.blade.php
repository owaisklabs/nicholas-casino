<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{env('APP_NAME')}}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- jquery ui css-->
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery-ui/jquery-ui.css')}}">
  <link rel="icon" href="{{asset('img/1x/mslady.png')}}">
  <!-- jquery js -->
  <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>


  <!-- jquery ui js -->
  <!-- <script type="text/javascript" src="{{asset('plugins/jquery-ui/jquery-ui.js')}}"></script> -->

  <!-- toastr js -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->
  <!-- toastr css -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> -->

  <!-- local css -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <!-- <link rel="stylesheet" href="{{asset('css/custom-style.css')}}"> -->
  <!-- <link rel="stylesheet" href="{{asset('dist/css/adminlte.css')}}"> -->

  <!-- adminlte css -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}"> -->

  <!-- bootstrap css -->
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

  <!-- fancy box -->
  <link rel="stylesheet" href="{{asset('fancybox/source/jquery.fancybox.css?v=2.1.7')}}" type="text/css" media="screen" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  {{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/fontawesome.css')}}"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <img src="{{ asset('dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image" width="20px"><span class="caret"></span> {{ucfirst(Auth::user()->name)}}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <!-- <a class="dropdown-item" href="#">
              Profile
            </a> -->
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link" id="topSidebar">
      <!-- <img src="{{asset('img/SVG/fab.svg')}}" alt="LaraStart Logo" class="brand-image img-circle"> -->
      <span class="brand-text font-weight-light" class="hidden">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Dashboard -->
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link ml-2" target="_blank">
              <i class="fas fa-globe"></i>
              <p>
                Website
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('logo.index')}}" class="nav-link">
              <i class="nav-icon far fa-copyright "></i>
              <p>
                Logo Management
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('banner.index')}}" class="nav-link">
                <i class="nav-icon fas fa-cogs "></i>
              <p>
                CMS Management
              </p>
            </a>
          </li>

                    <!-- Brand Management -->

                  <!-- User management -->
                  <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-user "></i>
                      <p>
                        User management
                      </p>
                    </a>
                  </li>

                  <!-- Settings -->
                  <li class="nav-item">
                    <a href="{{route('setting.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-cogs "></i>
                      <p>
                        Configuration
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('faq.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-cogs "></i>
                      <p>
                        FAQ
                      </p>
                    </a>
                  </li>


                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                @yield('content_header')
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
              <div class="container-fluid" style="overflow-x: hidden; overflow-y: auto; max-height: 100%;">
                @yield('content_body')
                @yield('edit_banner')

              </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->

          <footer class="main-footer">

          </footer>
        </div>

        <!-- local js -->
        {{-- <script src="{{asset('js/app.js')}}"></script> --}}
        <!-- <script src="{{asset('js/jquery.dataTables.min.js')}}" defer></script> -->
        <!-- <script src="{{asset('dist/js/adminlte.js')}}"></script> -->

        <!-- adminlte js -->
        <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
        <script src="{{asset('dist/js/demo.js')}}"></script>

        <!-- fancybox -->
        <script type="text/javascript" src="{{asset('fancybox/source/jquery.fancybox.pack.js?v=2.1.7')}}"></script>

        <!-- jquery ui js-->
        <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

        <!-- bootstrap js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- pusher work -->

        <!-- pusher -->
        <!-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script> -->
        <script>
            // $(document).ready(function() {
            //     $('#summernote').summernote();
            //     console.log($('#summernote'))
            // });
            $(document).ready(function(e) {


   $(".summernoteop").summernote({
                //  height: 150,
                //  toolbar: [
                //        ['style', ['bold', 'italic', 'underline', 'clear']],
                //        ['fontsize', ['fontsize']],
                //        ['color', ['color']],
                //        ['para', ['ul','ol','paragraph']],
                //        ["view", ["fullscreen", "codeview"]]
                //    ],
               });

            //    $('i.note-recent-color').each(function(){
            //       $(this).attr('style','background-color: transparent;');
            //    });

   });
    </script>
    <script>
        CKEDITOR.replace( 'editor1' );
</script>


      </body>
      </html>
