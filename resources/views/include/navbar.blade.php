<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {margin:0;}

        .navbar {
            overflow: hidden;
            background-color: #6f42c1;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .col-xs-6 {
            padding-right: 15px;
            padding-left: 15px;
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

        .main {
            padding: 16px;
            margin-top: 30px;
            height: 1500px; /* Used in this example to enable scrolling */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-fixed-top">
    <ul class="nav navbar-nav navbar-left">

        @if (Route::has('login'))

            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else

                <a href="{{URL::to('/login')}}">Login</a>
                <a href="{{ route('register') }}">Registration</a>
            @endauth
        @endif


    </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="icon-twitter"></i></a></li>

          <li>  <a href="#">Contact US</a></li>
            <li>  <a href="#">About</a></li>

        </ul>



</nav>



{{--<div id="about">--}}
    {{--<div class="container">--}}
        {{--<div class="row animate-box">--}}
            {{--<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">--}}
                {{--<h2>Our Latest Work</h2>--}}
                {{--<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--@include('include.mainpage')--}}
{{--<div class =container >--}}
    {{--<section>--}}
   {{--<div class="page-header" id="about">--}}
       {{--<h2>about<small> some of the coolest feachure</small></h2>--}}
   {{--</div>--}}
    {{--</section>--}}
{{--</div>--}}


{{--<div class="panel-group " id="about">--}}
    {{--<div class="panel panel-default" width="100%" height="100%">--}}
        {{--<div class="panel-body">--}}
{{--<h4>hellloooo welcome</h4>--}}
            {{--<p> hee this is new page</p>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</div>--}}
</body>
</html>
