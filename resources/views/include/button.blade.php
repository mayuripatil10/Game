<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style>
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
    </style>

    <script>
        $(document).ready(function(){
            $('.dropdown-submenu a.test').on("click", function(e){
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>


    <style>
        .button {
            width: 50px;
            height: 50px;
            background-color: #6f42c1;
            border:none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-style:italic;
            margin: 4px 4px;
            cursor: pointer;
        }
        .button1 {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }

        .button5 {border-radius: 50%;}

        .btn {
            display: inline-block;
            background: #f1a165;
            border: 0;
            line-height: 2.0em;
            padding: 0 0 0 1em;
            margin-bottom: 1em;
            outline: none;
            text-decoration: none;
            color: #666;
        }
        .arrow {
            display: inline-block;
            line-height: 2.0em;
            text-align: center;
            background: #333;
            color: white;
            font-size: 2em;
            width: 2.0em;
            transition: margin 200ms;
            margin-left: .75em;
        }
        Body

           body {
               padding: 4em;
               background-color: #eee;
           }

        h1 {
            font-size: 1.2em;
            font-weight: normal;
            text-align: center;
            color: #666;
        }

        hr {
            border: 1px solid #e3e3e3;
        }
        .roundshape {
            border: 2px solid red;

            padding: 10px;
            border-radius: 2em / 5em;
        }
        .button:active {
        /**background-color: #3e8e41;*!*/
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        .triangle-right {
            width: 50px;
            height: 50px;
            border-top: 50px solid transparent;
            border-left: 100px solid pink  ;
            border-bottom: 50px solid transparent;
        }

        .container ul{
            list-style:none;
        }
        .container ul li{
            width:150px;
            height:50px;
            text-align: center;
            float:left;
            color:white;
            font-size: 18px;
        }
        .container ul ul{
            display: none;
        }
        .container ul li:hover >ul{
            display:block;
        }
        </style>
</head>
<body>

<div class="center">
 <a href="#" class="btn">Submit <span class="arrow">❯</span></a>
    <br />
    <a href="#" class="btn btn-info">More Info <span class="arrow">❯</span></a>
    <br />
    <a href="#" class="btn btn-learn">Learn More <span class="arrow">❯</span></a>
    <br />
</div>
{{--<div class="diamond ">--}}
<button class="button button5">hello</button>
<br>
<div class="conatiner">
<button type="button" class="btn btn-primary">Button</button>
</div>
<button class="roundshape ">submit</button><br>

<button class="triangle-right"></button><br>
<button class="button button1">Shadow Button</button><br>
<button class="button button:active">Click Me</button><br>



<div class="container">

    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a  href="#">HTML</a></li>
            <li><a  href="#">CSS</a></li>
            <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a  href="#">2nd level </a></li>
                    <li><a  href="#">2nd level </a></li>
                    <li class="dropdown-submenu">
                        <a class="test" href="#">Another <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">3rd level </a></li>
                            <li><a href="#">3rd level </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
{{--<div class="container">--}}
    {{--<div class="col-sm-1">--}}
{{--<div class="container">--}}
    {{--<div class="btn-group">--}}
        {{--<div class="container ">--}}
            {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
            {{--chapter-1 <span class="caret"></span></button>--}}
        {{--<ul class="dropdown-menu " role="menu">--}}
            {{--<button id="btn">Level-1</button><br>--}}
            {{--<button onclick="">Level-2</button>--}}
            {{--<li><a href="">Level-3</a></li>--}}
            {{--<li><a href="">Level-4</a></li>--}}

        {{--</ul>--}}

    {{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--<br>--}}

{{--<div class="container">--}}

    {{--<div class="btn-group">--}}
        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
            {{--chapter-2 <span class="caret"></span></button>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
            {{--<li><a href="">Level-1</a></li>--}}
            {{--<li><a href="">Level-2</a></li>--}}
            {{--<li><a href="">Level-3</a></li>--}}
            {{--<li><a href="">Level-4</a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<br>--}}
{{--<div class="container">--}}

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

{{--<br>--}}
{{--<div class="container">--}}

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

{{--<br>--}}
{{--<div class="container">--}}

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
{{--</div>--}}
{{--<br>--}}

{{--</div>--}}
{{--</div>--}}

</body>
</html>

