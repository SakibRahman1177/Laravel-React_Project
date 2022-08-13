@extends('/layouts.app2')
@section('content')
<body>
<link rel="stylesheet" href="{{ URL::asset('css/registration.css') }}" />
<div class="reg">  
<div class="contain">
   
  <form action="{{route('customerEdit')}}" id="reg" method="post">
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
    <h3>Edit Customer Details</h3>

    <fieldset><span style="float:left;color:darkslateblue"> NAME</span>
      <input type="text" name="name" value="{{$customer->name}}" class="name">
    </fieldset>
    <!-- @error('name')
            <span class="text-danger">{{$message}}</span>
    @enderror -->


    <fieldset><span style="float:left;color:darkslateblue"> PHONE</span>
      <input type="text" name="phone" value="{{$customer->phone}}" class="phone">
    </fieldset>
    <!-- @error('prmID')
            <span class="text-danger">{{$message}}</span>
    @enderror -->


    <fieldset><span style="float:left;color:darkslateblue">EMAIL</span>
      <input type="text" name="email" value="{{$customer->email}}" class="email" >
    </fieldset>
    <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
    @enderror -->

    <fieldset>
      <button name="submit" class="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <a class="btn btn-danger" href="{{route('viewCustomerList')}}">Back</a>
  </form>

</div>
@include('inc.sidebar')
</body>
@endsection