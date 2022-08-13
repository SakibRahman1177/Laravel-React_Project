<link rel="stylesheet" href="/css/delivery/changepicture.css">

@extends('delivery.layout.dashboard')
@section('dashboard_content')
<form action="{{route('delivery.changepassword')}}" method="post">
{{csrf_field()}}


 
 
   <div class="form-group">
    <label for="ir_password">Current Password</label>
    <input type="password" class="form-control" id="ir_password" name="ir_password" placeholder="Enter Password">
    @error('ir_password')
                <span class="text-danger">{{$message}}</span>
     @enderror
     @if($errors->has('errors_irpassword'))
    <span class="text-danger">{{$errors->first('errors_irpassword') }}</span>
     @endif
  </div>
  
  
  <div class="form-group">
    <label for="i_password">New Password</label>
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