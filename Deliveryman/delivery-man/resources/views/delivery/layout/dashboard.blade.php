<link rel="stylesheet" href="/css/dashboard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@extends('delivery.layout.app')
@section('content')


<div class="sidebar-container">
  <div class="sidebar-logo">
  <a href="{{route('delivery.changepicture')}}" class="d-flex align-items-center text-light text-decoration-none " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
  
  @if(Session::has('delivery.image'))
  @php
  $image= Session::get('delivery.image')
  @endphp
 
  
 @else
 
  @endif
   <strong> 
   @if(Session::has('delivery.name'))
     {{Session::get('delivery.name')}}
     @endif
 </strong> 
</a>
  </div>

  <ul class="sidebar-navigation " >
    <li class="header">Navigation</li>
    <li>
      <a href="{{route('delivery.homepage')}}" style="text-decoration: none">
        <i class="fa fa-home" aria-hidden="true"></i> Homepage
      </a>
    </li>
    <li>
      <a href="{{route('delivery.noti')}}" style="text-decoration: none">
        <i class="fa fa-plus-square-o" aria-hidden="true"></i> Notification
      </a>
    </li>
    <li>
      <a href="{{route('delivery.history')}}" style="text-decoration: none">
        <i class="fa fa-info-circle" aria-hidden="true"></i>History
      </a>
    </li>
    <li class="header">Another Menu</li>
    <li>
      <a href="{{route('delivery.changeinformation')}}" style="text-decoration: none">
        <i class="fa fa-address-card" aria-hidden="true"></i> Change Information
      </a>
    </li>
    <li>
      <a href="{{route('delivery.changepassword')}}" style="text-decoration: none">
        <i class="fa fa-unlock" aria-hidden="true"></i> Change Password
      </a>
    </li>
  
    <li>
      <a href="{{route('delivery.signout')}}" style="text-decoration: none">
      <i class="fa fa-sign-out"></i>Sign out
      </a>
    </li>
  </ul>
</div>

<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
    @yield('dashboard_content')

    </div>

  </div>
</div>



@endsection

