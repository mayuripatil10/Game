<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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

  <!-- Controls -->
</div>
</div>

{{--<div class ="container" >--}}
    {{--welcome--}}
{{--</div>--}}
</body>
<style>

.carousel-caption h1, .carousel-caption h2, .carousel-caption h3, .carousel-caption h4, .carousel-caption h5, .carousel-caption h6{
 color:#000;
  
 }
 
.p {
  text-align: center;
  padding-top: 40px;
  font-size: 13px;
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


 html body .container-fluid.body-content {
     position: absolute;
     top: 100px;
     bottom: 30px;
     right: 0;
     left: 0;
     overflow-y: auto;
 }

</style>
<script>
$('.carousel').carousel({
  interval: 2000,
  pause: "false"
});
</script>
 


