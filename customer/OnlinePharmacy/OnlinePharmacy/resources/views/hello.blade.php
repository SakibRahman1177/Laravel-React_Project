@extends('layouts.app')
@section('content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

<style> .about-section {
  margin-top: 0px;
  margin-left: 0px;
  margin-right: 0px;
  padding: 50px;
  text-align: center;
  color: white;
  
}

.carousel {
  height: 1000px;
  position: relative;
  overflow: hidden;
}
</style>
</head>
<div class = "about-section">
<div class="container-fluid text-center">   
<div id="demo" class="carousel slide" data-ride="carousel">

 <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <!-- .carousel  creates a carousel -->
  <!-- .slide  Adds a CSS transition and animation effect when transitioning from one element to the next. If you don't want to use this effect, you can remove this class. -->
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <!-- .carousel indicators create the dots. The ots can inform the user which slide it is on and how many images are in this carousel.-->
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <!-- .carousel-inner add slides to the carousel -->
    <div class="carousel-item active">
      <img src="./images/Blue Modern Illustration Online Pharmacy Desktop Prototype  .png" class="d-block" style="width: 100%" />
    </div>
    <div class="carousel-item">
      <!-- .carousel-item specifies the content of each slide -->
      <img src="./images/Grey Red Minimalist Pharmacy Pill Medication Shop Online Advertising Promo Banner.png" class="d-block" style="width: 100%" />
    </div>
    <div class="carousel-item">
      <img src="./images/Purple Online Pharmacy Instagram Post.png" class="d-block" style="width: 100%" />
    </div>
  </div>
  <!-- Left and right controls/icons -->
  <!--.carousel-control-prev adds a left (previous) button to the loop that lets the user cycle back through slides -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span> <!-- .carousel-control-prev-icon adds a icon for previous button -->
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span> <!-- .carousel-control-next-icon adds a icon for next button -->
  </button>
</div>
</div>

  </body>
  </html>
@endsection