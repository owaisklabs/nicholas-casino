<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="National Specialist Database">
    <meta name="robots" content="index, follow" />
    <title>{{env('APP_NAME') . ' | Login'}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    *{
        font-family: -webkit-pictograph
    }
    .loginAdmin{
        height: 100vh;
        overflow: hidden;
        width: 100%;
        position: relative;
        background: url("{{asset('img/1x/casinoImg.jpg')}}");
        background-size:cover;
        background-position: top;
    }
    .loginAdmin::before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgb(0 0 0 / 73%);
        height: 100%;
        width: 100%;
    }
    .loginAdmin::after{
        content:'';
        background: url('{{asset("img/SVG/played.svg")}}');
        position: absolute;
        height: 100%;
        width: 50%;
        top: 50%;
        left: 70%;
        transform: translate(-50%, -50%);
        background-repeat: no-repeat;
        background-position: center;
    }
    }
    .form-control{
        outline: none;
        box-shadow: none
    }
    .form-control,
    button{
        margin-top: 2rem
    }
    input{
        background-color: #0000005c!important;
        border-color: #f5a801 !important;
        color: white !important;
        padding: 20px !important;
        border-radius: 8px !important;
        height: auto !important;
    }
    button.logInBtn{
        background-color: #f5a801;
        color: black;
        font-family: poppinbold;
        padding: 10px 45px;
        border: none;
        color: #fff;
        border-radius: 8px
    }
    h1{
        color: #fff;
        font-family: inherit;
        text-transform: uppercase;
        margin-bottom: 5rem
    }
    .col-lg-4{
        position: absolute;
        top: 50%;
        left: 20%;
        transform: translate(-50%, -50%);
    }
    @media only screen and (max-width:1024px){
        .col-lg-4{
            top: 50%;
            left: 50%;
            z-index: 2;
            width: 70%;
        }
        .loginAdmin::after{
            top: 50%;
            left: 50%;
            z-index: 0;
            width: 90%;

        }
        .loginAdmin::before{
            z-index: 1;
            background-color: #000000c7
        }
    }
    @media only screen and (max-width:600px){
        .col-lg-4{
            width: 95%;
        }
    }
</style>
<body >


    <div class="loginAdmin">
        <div class="col-lg-4 text-center">
            <h1>Admin Panel</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" placeholder="Email" name="email" class=" form-control">
                <input type="password" placeholder="Password" name="password" class="form-control">
                @if (Route::has('password.request'))
                    <div>
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                @endif
                <button type="submit" class="logInBtn">Login</button>
            </form>
        </div>
    </div>



   <noscript>Your browser does not support JavaScript!</noscript>
</body>
</html>
