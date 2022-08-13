<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style= "width:10% , height: 20%">
  <h3 class="w3-bar-item"></h3>
  <h3 class="w3-bar-item"></h3>
  <h3 class="w3-bar-item"></h3>
  <a href="{{route('profile')}}" class="w3-bar-item w3-button">Profile</a>
  <a href="{{route('editprofile')}}" class="w3-bar-item w3-button">Change Information</a>
  <a href="{{route('addprescription')}}" class="w3-bar-item w3-button">Add Prescription </a>
  <a href="{{route('viewprescription')}}" class="w3-bar-item w3-button">Show Prescription </a>
  <a href="{{route('editprescription')}}" class="w3-bar-item w3-button">Change Prescription </a>

  <a href="{{route('logout')}}" class="w3-bar-item w3-button">Log Out </a>
</div>
      
</body>
</html>
