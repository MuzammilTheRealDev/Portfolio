<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
	<link rel="icon" type="image/png" href="{{ asset('images/photoshop8.png')}}"/>
    <link rel="shortcut icon" href="{{ asset("loginassets/images/fav.jpg") }}">
    <link rel="stylesheet" href="{{ asset("loginassets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("loginassets/css/fontawsom-all.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("loginassets/css/style.css") }}" />
</head>

<body>
    <div class="container-fluid ">
        <div class="container ">
            <div class="row cdvfdfd">
                <div class="col-lg-10 col-md-12 login-box">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 log-det">
                            <div class="small-logo">
                                <img src="{{ asset('images/photoshop9.png')}}" height="85vh" class="login_logo shd mb-2" alt="logo">
                                
                            </div>
                            <p class="dfmn">Enter login details and feel a vast Experience. </p>

                            <div class="text-box-cont">
                                <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email..." aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Enter Password..." name="password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group center">
                                    <button style="background-color: #3C7A89; color: aliceblue" class="btn  btn-round">Login</button>
                                </div>
                            </form>
                                <div class="row">
                                    <p class="forget-p">Don't have an account? <span><a href="{{ route('register')}}" style="color:#3C7A89;">Register Now</a></span></p>
                                </div>
                                <div class="row">
                                    <p class="small-info">Connect With Social Media</p>
                                </div>
                            </div>



                            <div class="row">
                                <ul>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-linkedin-in"></i></li>
                                </ul>
                            </div>



                        </div>
                        <div class="col-lg-6 col-md-6 box-de">
                        <div class="inn-cover">
                            <div class="ditk-inf">
                                <div class="small-logo">
                                <img src="{{ asset('images/photoshop9.png')}}" class="shd mb-3" height="80px" alt=""> <br>Muzammil Hassan

                            </div>
                                    <h2 class="w-100">Din't Have an Account </h2>
                                    <p>Simply Create your account by clicking the Register Button</p>
                                    <a href="{{ route('register')}}">
                                    <button type="button" class="btn btn-outline-light">Register</button>
                                    </a>
                                </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset("loginassets/js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ asset("loginassets/js/popper.min.js") }}"></script>
<script src="{{ asset("loginassets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("loginassets/js/script.js") }}"></script>


</html>

