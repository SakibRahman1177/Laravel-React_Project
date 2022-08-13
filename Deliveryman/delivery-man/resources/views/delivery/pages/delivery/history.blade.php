<link rel="stylesheet" href="/css/project/projectdetails.css">

@extends('delivery.layout.dashboard')
@section('dashboard_content')





<table class="table table-striped">
  <thead>
    <tr>
     
      <th scope="col">Product Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Address</th>
      <th scope="col">Time</th>
     
    </tr>
  </thead>
  <tbody>
 
  @foreach($data as $data)

    <tr>
      
      <td>{{$data->name}}</td>
      <td>{{$data->amount}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->time}}</td>



      
    
    </tr>
    
 @endforeach
 
    

  </tbody>
</table>
@endsection


