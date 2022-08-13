@extends('/layouts.app2')
@section('content')
<body>
    <a class="btn btn-danger" href="{{route('adminDash')}}" style="margin-top: 50px;margin-left: 1450px;">Back</a>
<div style="margin-top: 80px;margin-left: 320px;margin-right: 50px;">
<h1 style="font-size: 35px; color:#190033;text-align:center;font-weight:bold;"> Customer List</h1><hr>
<table class="table table-bordered table-striped">
    <thead style="background: darkslateblue;color:azure;">
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PHONE</th>
        <th>EMAIL</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($customers as $customer)
      <tr>
      <td>{{ $customer->id }}</td>
      <td>{{ $customer->name }}</td>
      <td>{{ $customer->phone }}</td>
      <td>{{ $customer->email }}</td>
      <td><a href="/customerEdit/{{$customer->id}}">Details</a></td>
        <td><a href="/customerDelete/{{$customer->id}}">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table></br>

      
</div>
@include('inc.sidebar')
</body>
@endsection
