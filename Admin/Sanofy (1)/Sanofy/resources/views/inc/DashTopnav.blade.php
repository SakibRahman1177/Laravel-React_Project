<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
<div class="w3-bar w3-white w3-card" id="myNavbar" style="color:blue">
<a href="{{route('adminDash')}}" class="w3-bar-item w3-button w3-wide" style="color:indigo;">SANOFY.COM</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="{{route('adminDash')}}" class="w3-bar-item w3-button">  DASHBOARD</a>
      <a href="{{route('Profile')}}" class="w3-bar-item w3-button">  PROFILE</a>
      <a href="{{route('logout')}}" class="w3-bar-item w3-button">  LOGOUT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

</body>