<link rel="stylesheet" href="/css/project/projectdetails.css">

@extends('delivery.layout.dashboard')
@section('dashboard_content')





<table class="table table-striped">
  <thead>
    <tr>
     
      <th scope="col">Product Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Address</th>
      <th scope="col">Customer Details</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
 
  @foreach($data as $data)

    <tr>
      
      <td>{{$data->name}}</td>
      <td>{{$data->amount}}</td>
      <td>{{$data->address}}</td>
      <td><a href="{{route('delivery.customerdetails',['id' => $data->i_id])}}" class="btn btn-info">View Details</a>
      <td>{{$data->status}}</td>

      @if($data->status=='No Response')
      <td><a href="{{route('delivery.notifilter',['id' => $data->id, 'status'=>'Processing'])}}" class="btn btn-info">Accept</a>
      <a href="{{route('delivery.notifilter',['id' => $data->id, 'status'=>'Rejected'])}}" class="btn btn-warning">Reject</a></td>
      @endif

      @if($data->status=='Processing')
      <td><a href="{{route('delivery.notifilter',['id' => $data->id, 'status'=>'Delivered'])}}" class="btn btn-danger">Delivered</a></td>
      @endif


      
    
    </tr>
    
 @endforeach
 
    

  </tbody>
</table>
@endsection


