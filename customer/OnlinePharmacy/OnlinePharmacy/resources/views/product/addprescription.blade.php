@extends('layouts.log')
@include('inc.sidenav')
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
.center {
  display: flex;
  align-items: center;
  justify-content: center;
  
}


  </style>
{{-- <div class="medics">  
<div class="contain"> --}}
  <div class = "about-section">
    <div class="container text-center"> 

  <form action="{{route('addprescription')}}" id="medics" method="post">
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

    <h3>Add Prescription</h3>

      <div class="col-md-4 form-group container text-center">
        <span>Name</span> <br>
      <input placeholder="Your Name" name="name" value="{{old('name')}}" class="form-control">
    <!-- @error('name')
            <span class="text-danger">{{$message}}</span>
    @enderror --> 
      </div>
    <br>

    
    <div class="col-md-4 form-group container text-center">
      <span>Age</span> <br>
        <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
      <!-- @error('dob')
              <span class="text-danger">{{$message}}</span>
      @enderror -->
    </div>
      <br>

      <div class="col-md-4 form-group container text-center">
        <span>Weight</span> <br>
      <input placeholder="Your Weight" name="weight" value="{{old('weight')}}" class="form-control">
    <!-- @error('weight')
            <span class="text-danger">{{$message}}</span>
    @enderror --> 
      </div>
      

      {{-- <div>
        <span>Weight</span> <br>
      <input placeholder="Your Weight" name="weight" value="{{old('weight')}}" style="size: 60px" class="form-control" >
    <!-- @error('weight')
            <span class="text-danger">{{$message}}</span>
    @enderror -->
      </div> --}}

    <div class="col-md-4 form-group container text-center">
      <span>Types of Diseases</span> <br>
    <select name="type" value="{{old('type')}}" id="type" class="ctg" >
        <option value="">Choose</option>
        <option value="Cold & Fever">Cold & Fever</option>
        <option value="Allergy">Allergy</option>
        <option value="Diarrhea">Diarrhea</option>
        <option value="Cavities">Cavities</option>
      </select>
    <!-- @error('type')
            <span class="text-danger">{{$message}}</span>
    @enderror -->
    </div>


    <div class="col-md-4 form-group container text-center">
      <span>Inscription</span> <br>
        <input placeholder="Name of Inscription" name="ins" value="{{old('ins')}}" class="form-control" >
      <!-- @error('ins')
              <span class="text-danger">{{$message}}</span>
      @enderror -->
    </div>

      <div class="col-md-4 form-group container text-center">
        <span>Subscription</span> <br>
        <input placeholder="Name of Subscription" name="sub" value="{{old('sub')}}" class="form-control" >
      <!-- @error('sub')
              <span class="text-danger">{{$message}}</span>
      @enderror -->
      </div>

      <div class="col-md-4 form-group container text-center">
        <span>Address</span> <br>
        <textarea placeholder="Type your address here...." name="address" rows="5" value="{{old('address')}}"></textarea>
      <!-- @error('address')
              <span class="text-danger">{{$message}}</span>
      @enderror -->
      </div>
<br>


      <button class= "button">
        <span class="text">Add..</span>
    <i class="ri-check-line icon"></i>
    </button>  
  </form>
</div>
  </div>
  
@endsection