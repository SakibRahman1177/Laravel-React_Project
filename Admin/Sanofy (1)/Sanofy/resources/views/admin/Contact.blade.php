@extends('layouts.app1')
@section('content')
<link rel="stylesheet" href="./css/registration.css">
<div class="reg">  
<div class="contain">
   
  <form action="{{route('Contact')}}" id="reg" method="post">
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
    <h3>Contact Form</h3>
    <h4>Contact us for any query</h4>
    <fieldset><span style="float:left"> NAME</span>
      <input placeholder="Your name" name="name" class="text">
    </fieldset>
    @error('name')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <fieldset><span style="float:left"> ID</span>
      <input placeholder="Your unique Id, start with: (PRM-)" name="prmID" class="prmID">
    </fieldset>
    @error('prmID')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <fieldset><span style="float:left">EMAIL</span>
      <input placeholder="Your Email Address" name="email" class="email" >
    </fieldset>
    @error('email')
            <span class="text-danger">{{$message}}</span>
    @enderror

    </br><fieldset><span style="float:left">DEPARTMENT</span>
    <select name="depart" id="dept" class="dept" style="width: 60%">
        <option value="Medicine">Medicine</option>
        <option value="Surgical & Clinical">urgical & Clinical</option>
        <option value="Health & Care">Health & Care</option>
        <option value="Dental & Oral">Dental & Oral</option>
      </select>
    </fieldset>
    @error('dept')
            <span class="text-danger">{{$message}}</span>
    @enderror
    </br>

    <fieldset><span style="float:left">DATE OF BIRTH</span>
      <input type="date" name="dob" class="dob" style="width: 60%">
    </fieldset>
    @error('dob')
            <span class="text-danger">{{$message}}</span>
    @enderror
    </br>

    <fieldset><span style="float:left">GENDER</span>
            <input type="radio" name="gender" class="gender" value="Male" tabindex="6"> Male &nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" class="gender" value="Female" tabindex="6"> Female &nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" class="gender" value="Other" tabindex="6"> Other
    </fieldset>
    @error('gender')
            <span class="text-danger">{{$message}}</span>
    @enderror
    </br>

    <fieldset><span style="float:left">USERNAME</span>
      <input placeholder="Your username" name="username" class="username">
    </fieldset>
    @error('username')
            <span class="text-danger">{{$message}}</span>
    @enderror

    <fieldset><span style="float:left">PASSWORD</span>
      <input placeholder="Your pasword" name="password" class="password">
    </fieldset>
    @error('password')
            <span class="text-danger">{{$message}}</span>
    @enderror

    <fieldset><span style="float:left">CONFIRM PASSWORD</span>
      <input placeholder="Confirm your password" name="confirmpass" class="confirmpass">
    </fieldset>
    @error('confirmpass')
            <span class="text-danger">{{$message}}</span>
    @enderror

    <fieldset><span style="float:left">PHONE</span>
      <input placeholder="Your Phone Number" name="phone" class="tel">
    </fieldset>
    @error('phone')
            <span class="text-danger">{{$message}}</span>
    @enderror

    <fieldset><span style="float:left">ADDRESS</span>
      <textarea placeholder="Type your address here...." name="address"></textarea>
    </fieldset>
    @error('address')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <fieldset>
      <button name="submit" class="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
@endsection