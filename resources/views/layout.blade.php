<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        html body .container-fluid.body-content {
            position: absolute;
            top: 100px;
            bottom: 30px;
            right: 0;
            left: 0;
            overflow-y: auto;
        }
        body {
            margin: 0;
            background-color:#c1c1c1;
            font-family: Verdana,sans-serif;
            font-size: 0.9em;

        }

        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        #navbar {
            overflow: hidden;
            background-color: #b8daff;
            padding: 40px 10px;
            /*transition: 0.4s;*/
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 99;
            border-radius: 2em / 5em;
        }

        #navbar a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        #navbar #logo {
            font-size: 35px;
            font-weight: bold;
            transition: 0.4s;
        }

        #navbar a:hover {
            background-color: #ddd;
            color: black;
            border-bottom: 3px solid red;
        }

        #navbar a.active {
            background-color: dodgerblue;
            color: white;
        }



        @media screen and (max-width: 580px) {
            #navbar {
                padding: 20px 10px !important;
            }
            #navbar a {
                float: none;
                display: block;
                text-align: left;
            }

        }
        .carousel-caption h1, .carousel-caption h2, .carousel-caption h3, .carousel-caption h4, .carousel-caption h5, .carousel-caption h6{
            color:#000;

        }
        .carousel-inner .item{
            height:500px;
            background-size:cover;
            background-position: center center;
        }

        .carousel-indicators li {
            background: #ccc;
        }

        .carousel-indicators .active {
            background: #CF000F;
        }

        .site-footer {
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            padding: 5em 0;
          /*line-height: 1.2;*/
            background: #6c5b7b;
        }

        .site-footer .heading {
            font-size: 12px;
            letter-spacing: .2em;
            font-weight: bold;
            margin-bottom: 50px;
            text-transform: uppercase;
            color: #fff;
        }

        .site-footer.border-top {
            border-top: 1px solid #e6e6e6 !important;
        }
        section-heading {
            position: relative;
            z-index: 1;
            margin-bottom: 80px;
            text-align: center;
             color: #6610f2;

        }
        .heading{
            color:#e44d3c;
        }
        .article {
            margin: 5px;
            padding: 10px;
            background-color: white;
            font-family:Lato ;
            border-bottom: 3px solid red;
        }
        #gtco-main {
            width: 100%;
            float: left;
        }
        #gtco-main .related-title {
            font-size: 18px;
            text-transform: uppercase;
            font-family: "Roboto Mono", serif;
            color: #000;
            margin-bottom: 50px;
        }

        .gtco-nav > .container {
            padding-bottom: 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.7);
        }

    </style>
</head>
<body>

<div id="navbar">
    <a href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <div class="w3-container">
        <div class="w3-dropdown-hover">
            <button class="w3-button w3-black">Hover Over Me!</button>
            <div class="w3-dropdown-content w3-bar-block w3-border">
                <a href="#" class="w3-bar-item w3-button">Link 1</a>
                <a href="#" class="w3-bar-item w3-button">Link 2</a>
                <a href="#" class="w3-bar-item w3-button">Link 3</a>
            </div>
        </div>
    </div>

</div>


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
<div id="gtco-main">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-12">
                <ul id="gtco-post-list">
                    <li class="full entry animate-box" data-animate-effect="fadeIn">
                        <a href="single.html">
                            <div class="entry-img" style="background-image: url(images/img_1.jpg"></div>
                            <div class="entry-desc">
                                <h3>How Web Hosting Can Impact Page Load Speed</h3>
                                <h4>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, tsingle.htmlen she continued her way.</h4>
                            </div>
                        </a>
                        <a href="#" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <h2 font color="red">News Section</h2>

    <div class="article">
        <h2>News Article</h2>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in porta lorem. Morbi condimentum est nibh, et consectetur tortor feugiat at.</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in porta lorem. Morbi condimentum est nibh, et consectetur tortor feugiat at.</p>
    </div>
</div>

<section class="site-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <div class="block-15">
                    <div class="heading">
                        <h2>Welcome To Brotherly Love</h2>
                    </div>
                    <div class="text mb-5">
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. A quibusdam nisi eos accusantium eligendi velit deleniti nihil ad deserunt rerum incidunt nulla nemo eius molestiae architecto beatae asperiores doloribus animi.</p>
                        <p class="text-black">Church Pastor <strong>Gregg Smith</strong></p>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<footer class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <!--   <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <p>Perferendis eum illum voluptatibus dolore tempora consequatur minus asperiores temporibus.</p>
              </div> -->
            <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
                <h3 class="heading">Church Quick Links</h3>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="list-unstyled">
                            <li><a href="#">Men's Ministry</a></li>
                            <li><a href="#">Women's Ministry</a></li>
                            <li><a href="#">Children's Ministry</a></li>
                            <li><a href="#">Youth Ministry</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-unstyled">
                            <li><a href="#">Senior Adult Ministry</a></li>
                            <li><a href="#">Marriage Ministries</a></li>
                            <li><a href="#">Missions & Outreach</a></li>
                            <li><a href="#">Prayer Ministry</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Privacy &amp; Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->

</div>

</body>


<script>
    // When the user scrolls down 20px from the top of the document, slide down the navbar
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-50px";
        }
    }
    $('.carousel').carousel({
        interval: 2000,
        pause: "false"
    });
</script>

</body>
</html>
