<link rel="stylesheet" href="/css/delivery/registration.css">

@extends('delivery.layout.app')
@section('content')
<form action="{{route('delivery.registrationSubmit')}}" method="post">
{{csrf_field()}}

<div class="form-group">
    <label for="i_name">Name</label>
    <input type="text" class="form-control" id="i_name" name="i_name" value="{{old('i_name')}}" placeholder="Enter Name">
    @error('i_name')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  <div class="form-group">
    <label for="i_phone">Phone</label>
    <input type="text" class="form-control" id="i_phone" name="i_phone" value="{{old('i_phone')}}"  placeholder="Enter Phone">
    @error('i_phone')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  <div class="form-group">
    <label for="i_email">Email</label>
    <input type="email" class="form-control" id="i_email" name="i_email" value="{{old('i_email')}}"  placeholder="Enter Email">
    @error('i_email')
                <span class="text-danger">{{$message}}</span>
     @enderror
   
  </div>
  <div class="form-group">
    <label for="i_address">Address</label>
    <input type="text" class="form-control" id="i_address" name="i_address" value="{{old('i_address')}}"  placeholder="Enter Address">
    @error('i_address')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  
  <div class="form-group">
    <label for="i_password">Password</label>
    <input type="password" class="form-control" id="i_password" name="i_password" placeholder="Enter Password">
    @error('i_password')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>

  <div class="form-group">
    <label for="ic_password">Confirm Password</label>
    <input type="password" class="form-control" id="ic_password" name="ic_password" placeholder="Confirm Password">
    @error('ic_password')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection