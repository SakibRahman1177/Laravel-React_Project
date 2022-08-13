<link rel="stylesheet" href="/css/delivery/login.css">

@extends('delivery.layout.app')
@section('content')
<form action="{{route('delivery.login')}}" method="post">
{{csrf_field()}}
  <div class="form-group">
    <label for="i_email">Email</label>
    <input type="email" class="form-control" id="i_email" name="i_email"  placeholder="Enter Email">
    @error('i_email')
                <span class="text-danger">{{$message}}</span>
     @enderror
     @if($errors->has('errors_email'))
    <span class="text-danger">{{$errors->first('errors_email') }}</span>
     @endif
  </div>
  <div class="form-group">
    <label for="i_password">Password</label>
    <input type="password" class="form-control" id="i_password" name="i_password" placeholder="Password">
    @error('i_password')
                <span class="text-danger">{{$message}}</span>
     @enderror
     @if($errors->has('errors_password'))
     <span class="text-danger">{{$errors->first('errors_password') }}</span>
     @endif

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection