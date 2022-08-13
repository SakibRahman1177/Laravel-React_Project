@extends('/layouts.app1')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/registration.css') }}" />
<div class="reg">  
<div class="contain">
   
  <form action="{{route('Registration')}}" id="reg" method="post">
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
    <h3>Registration</h3>
    <h4>Fill-up you departmental information</h4>


    <fieldset><span style="float:left;color:darkslateblue"> NAME</span>
      <input placeholder="Your name" name="name" value="{{old('name')}}" class="text">
    </fieldset>
    <!-- @error('name')
            <span class="text-danger">{{$message}}</span>
    @enderror -->


    <fieldset><span style="float:left;color:darkslateblue">EMAIL</span>
      <input placeholder="Your Email Address" name="email" value="{{old('email')}}" class="email" >
    </fieldset>
    <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
    @enderror -->
  


    <fieldset><span style="float:left;color:darkslateblue">USERNAME</span>
      <input placeholder="Your username" name="username" value="{{old('username')}}" class="username">
    </fieldset>
    <!-- @error('username')
            <span class="text-danger">{{$message}}</span>
    @enderror -->


    <fieldset><span style="float:left;color:darkslateblue">PASSWORD</span>
      <input type="password" placeholder="Your pasword" name="password" value="{{old('password')}}" class="password">
    </fieldset>
    <!-- @error('password')
            <span class="text-danger">{{$message}}</span>
    @enderror -->


    <fieldset><span style="float:left;color:darkslateblue">CONFIRM PASSWORD</span>
      <input type="password" placeholder="Confirm your password" name="confirmpass" value="{{old('confirmpass')}}" class="confirmpass">
    </fieldset>
    <!-- @error('confirmpass')
            <span class="text-danger">{{$message}}</span>
    @enderror -->
      <button name="submit" class="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
@endsection