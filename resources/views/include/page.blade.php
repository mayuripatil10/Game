<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styles.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    body {margin:0;}

    .navbar {
        overflow: hidden;
        background-color: #6f42c1;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 99;
    }
    .navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .navbar a:hover {
        background: #ddd;
        color: black;
    }

    .sidebar a {
        padding: 10px 12px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        padding-top: 0px;
    }
    .carousel-inner img {
        width: 100%; /* Set width to 100% */
        margin: auto;
        min-height:200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
        .carousel-caption {
            display: none;
        }
    }
    .btn {
        display: inline-block;
        background: #818181;
        border: 0;
        line-height: 2.5em;
        padding: 0 0 0 1em;
        margin-bottom: 1em;
        outline: none;
        text-decoration: none;
        color: #666;
    }

    arrow {
        display: inline-block;
        line-height: 2.5em;
        text-align: center;
        background: #333;
        color: white;
        font-size: 1em;
        width: 2.5em;
        transition: margin 200ms;
        margin-left: .75em;
    }


    /*}*/
    /*.ScrollStyle*/
    /*{*/
        /*max-height: 1500px;*/
        /*overflow-y: scroll;*/
    /*}*/
</style>
<body>

<!-- Navbar -->
<div id ="page">

<div id="header">
<div class="ScrollStyle">
<nav class="navbar navbar-fixed-top">
    <ul class="nav navbar-nav navbar-left">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{URL::to('/login')}}">LOGIN</a>
                <a href="{{ route('register') }}">REGISTRATION</a>
            @endauth
        @endif
    </ul>
    <ul class="nav navbar-nav navbar-right">
        {{--<li><a href="#"><i class="icon-twitter"></i></a></li>--}}
        <li>  <a href="#">CONTACT US</a></li>
        <li>  <a href="#">ABOUT</a></li>
        <li>  <a href="/game">GAME</a></li>

    </ul>
</nav>
</div>
    <br>
    <br>
<!-- Page content -->

    <div style="padding:15px 15px 2500px;font-size:30px">
        <div class="container-fluid body-content">
            <div id="mycarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">

                        <img src="/img/hg.jpeg" data-color="lightblue" alt="First Image"   width="100%" height="100%">
                        </a>
                        <div class="carousel-caption mycolor4">

                        </div>
                    </div>
                    <div class="item">
                        <a href="{{URL::to('/login')}}">
                            <img src="/img/math.jpeg" data-color="firebrick" alt="Second Image" width="100%" height="100%">
                        </a>
                        <div class="carousel-caption mycolor4">

                        </div>
                    </div>
                    <div class="item">
                        <a href="{{URL::to('/register')}}">
                            <img src="/img/uj.jpg" data-color="violet" alt="Third Image" width="100%" height="100%" >
                        </a>
                        <div class="carousel-caption mycolor4">

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
<br>
    <br>
    <div class="left">

        <a href="#" class="btn">Submit <span class="arrow">❯</span></a>
        <br />
        <div id="demo">

            <script src="/js/sup.js">

            </script>

        </div>
    </div>
    <div class="container">
        <div class="col-md-2">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    chapter-2 <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="">Level-1</a></li>
                    <li><a href="">Level-2</a></li>
                    <li><a href="">Level-3</a></li>
                    <li><a href="">Level-4</a></li>
                </ul>
            </div>
        </div>
    </div>

            {{--<div class="container">--}}
                {{--<div class="col-md-2">--}}
                    {{--<div class="btn-group">--}}
                        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
                            {{--chapter-3 <span class="caret"></span></button>--}}
                        {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li><a href="">Level-1</a></li>--}}
                            {{--<li><a href="">Level-2</a></li>--}}
                            {{--<li><a href="">Level-3</a></li>--}}
                            {{--<li><a href="">Level-4</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="container">--}}
                {{--<div class="col-md-2">--}}
                    {{--<div class="btn-group">--}}
                        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
                            {{--chapter-4 <span class="caret"></span></button>--}}
                        {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li><a href="">Level-1</a></li>--}}
                            {{--<li ><a href="">Level-2</a></li>--}}
                            {{--<li ><a href="">Level-3</a></li>--}}
                            {{--<li><a href="">Level-4</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="container">--}}
                {{--<div class="col-md-2">--}}
                    {{--<div class="btn-group">--}}
                        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
                            {{--chapter-5 <span class="caret"></span></button>--}}
                        {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li><a href="">Level-1</a></li>--}}
                            {{--<li><a href="">Level-2</a></li>--}}
                            {{--<li><a href="">Level-3</a></li>--}}
                            {{--<li><a href="">Level-4</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
            {{--</div>--}}

</body>
</html>
