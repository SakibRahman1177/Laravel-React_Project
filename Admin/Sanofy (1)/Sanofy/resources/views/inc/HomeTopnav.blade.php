<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar" style="color:blue">
  <a href="#home" class="w3-bar-item w3-button w3-wide" style="color:indigo;">SANOFY.COM</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="{{route('Home')}}" class="w3-bar-item w3-button">HOME</a>
      <a href="{{route('Login')}}" class="w3-bar-item w3-button">  LOGIN</a>
      <a href="{{route('Registration')}}" class="w3-bar-item w3-button">  REGISTRATION</a>
    </div>
  </div>
</div>

</body>