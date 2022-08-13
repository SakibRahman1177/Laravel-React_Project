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
  .center {
    display: flex;
    align-items: center;
    justify-content: center;

    
  }
  .about{text-align: right;}

  table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;


}
    </style>
  <div>
<div class = "about-section">
    <div class="container text-center"> 
      <h1>Profile</h1>
        <div class="about">Logged in User: 
            @if(Session::get('customer')) {{Session::get('customer')}}  
            
            </div>
<table class="table table-border">
    <tr>
        <th>Name</th>
        <td>{{$customer->name}}</td>
    </tr>
    <tr>
        <th>ID</th>
        <td>{{$customer->cusid}}</td>
    </tr>  

    <tr>
        <th>Date of Birth</th>
        <td>{{$customer->dob}}</td>
    </tr>
    <tr>
        <th>EMAIL</th>
        <td>{{$customer->email}}</td>
    </tr>
    <tr>
        <th>PHONE</th>
        <td>{{$customer->phone}}</td>
    </tr>
        {{-- <th colspan="2">Action</th> --}}
       <tr>
        
        
      
       
        
    </tr>

</table>
</div>
</div>
  </div>

@endif 
@endsection