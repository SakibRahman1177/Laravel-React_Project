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
<body>
    <div class = "about-section">
        <div class="container text-center"> 
          <h1>Prescription</h1>
            
    
    <table class="table table-border" style="font-size: 25px;">
        <tr>
            <th>Name</th>
            <td>{{$prescription->name}}</td>
        </tr>
        <tr>
        <th>AGE</th>
            <td>{{$prescription->dob}}</td>
        </tr>
        <tr>
        <th>WEIGHT</th>
            <td>{{$prescription->weight}}</td>
        </tr>
        <tr>
        <th>TYPE OF DISEASE</th>
            <td>{{$prescription->type}}</td>
        </tr>
        <tr>
        <th>INSCRIPTION</th>
            <td>{{$prescription->ins}}</td>
        </tr>
        <tr>
        <th>SUBSCRIPTION</th>
            <td>{{$prescription->sub}}</td>
        </tr>
        <tr>
        <th>ADDRESS</th>
            <td>{{$prescription->address}}</td>
        </tr>
    </table></br>
          
    </div> 
    </body>

    @endsection
    
    
   