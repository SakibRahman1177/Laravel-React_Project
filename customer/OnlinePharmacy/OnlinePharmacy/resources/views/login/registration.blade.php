@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
<style>

.about-section {
  margin-top: 0px;
  margin-left: 0px;
  margin-right: 0px;
  padding: 50px;
  text-align: center;
  background-image: linear-gradient(to right, #3ab5b0 0%, #3d99be 31%, #56317a 100%);
  color: white;
  
}



  </style>
  <form action="{{route('signup')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <div class = "about-section">
<div class="container text-center"> 
<h1>
   

</h1>

<h2>Create Your Account</h2>

     <div class="col-md-4 form-group container text-center"> 
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Your Name" >
            {{-- @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror --}}
        </div>

        <div class="col-md-4 form-group container text-center"> 
            <span>User Name</span>
            <input type="text" name="username" value="{{old('username')}}" class="form-control" placeholder="Your Username" >
        </div>

    <div class="col-md-4 form-group container text-center">
        <span>Id</span>
        <input type="text" name="cusid" value="{{old('stuid')}}"class="form-control" placeholder="Your ID">
    </div>

    <div class="col-md-4 form-group container text-center">
        <span>Date of Birth</span>
        <input type="date" name="dob" value="{{old('dob')}}" class="form-control" placeholder="Your date of birth">
    </div>

    <div class="col-md-4 form-group container text-center">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Your Email address">
    </div>

    <div class="col-md-4 form-group container text-center">
        
        <span>Phone</span> 
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control " placeholder="Your phone number">
    </div> 
    <div class="col-md-4 form-group container text-center">
        
        <span>Password</span> 
        <input type="password" name="password"  class="form-control " placeholder="Your password">
    </div> 

    <div class="col-md-4 form-group container text-center">
        
        <span>Confirm Password</span> 
        <input type="password" name="confirm password"  class="form-control " placeholder="confirm password">
    </div> 
<br>
    <div class="col-md-4 form-group container text-center">
        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
        <label class="form-check-label" for="form2Example3">
          I agree all statements in <a href="#!">Terms of service</a>
        </label>
      </div>
    <br>
    <button class= "button">
        <span class="text">submit</span>
    <i class="ri-check-line icon"></i>
    </button>

    <div class="text-center mt-4">
                    
        <span>Already a member?</span>
        <a href="{{route('login')}}" class="text-decoration-none">Login</a>

      </div>
</form>
</div> 
</div>

@endsection 


