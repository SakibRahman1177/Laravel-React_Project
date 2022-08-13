@extends('layouts.log')
@include('inc.sidenav')
@section('content')
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
 .about{text-align: right;}

 .container {
  position: relative;
  width: 50%;
  max-width: 400px;
}


.container {
    padding: 0 16px;
}

.container::after,
.row::after {
    content: "";
    clear: both;
    display: table;
}

.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
}

.button:hover {
    background-color: rgb(85, 85, 85);
}
 </style>
 <body>
<div class = "about-section">
    <div class="container text-center"> 
        <h1>DASHBOARD</h1>
<div class="about"> USER: 
    @if(Session::get('customer')) {{Session::get('customer')}}  
    </div>
    <td>{{$customer->name}}</td>


    <div class="size">
        
        <div class="row">
          <div class="column">
            <div class="card">
              <img src="{{URL::asset('/images/download (1).png')}}" alt="item 1" style="width:100%">
              
            </div>
            <div class="container">
                <a style="font-size: 25px;margin-left: 100px;" href="{{route('profile')}}">Profile</a>
              </div>
          </div>
        
          <div class="column">
            <div class="card">
              <img src="{{URL::asset('/images/addpres.jpg')}}" alt="item 1" style="width:100%">
              
            </div>

            <div class="container">
                <a style="font-size: 25px;margin-left: 100px;" href="{{route('addprescription')}}">Prescription</a>
              </div>
          </div>
        
          <div class="column">
            <div class="card">
              <img src="{{URL::asset('/images/shop.jpg')}}" alt="item 1" style="width:100%">
              
            </div>
            <div class="container">
                <a style="font-size: 25px;margin-left: 100px;" href="{{route('product')}}">Product</a> 
              </div>
          </div>
        </div> 
        </div>



    </div>
</div>
@endif 
</body>
@endsection