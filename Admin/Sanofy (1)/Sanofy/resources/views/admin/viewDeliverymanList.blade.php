@extends('/layouts.app2')
@section('content')
<body>
<a class="btn btn-danger" href="{{route('adminDash')}}" style="margin-top: 50px;margin-left: 1450px;">Back</a>
<div style="margin-top: 80px;margin-left: 320px;margin-right: 50px;">
<h1 style="font-size: 35px; color:#190033;text-align:center;font-weight:bold;"> Delivery man List</h1><hr>
<table class="table table-bordered table-striped">
    <thead style="background: darkslateblue;color:azure;">
      <tr>
        <th>NAME</th>
        <th>ID</th>
        <th>EMAIL</th>
        <th>DOB</th>
        <th>GENDER</th>
        <th>USERNAME</th>
        <th>PHONE</th>
        <th>ADDRESS</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($deliveries as $delivery)
      <tr>
      <td>{{ $delivery->name}}</td>
      <td>{{ $delivery->id}}</td>
      <td>{{ $delivery->email }}</td>
      <td>{{ $delivery->dob }}</td>
      <td>{{ $delivery->gender }}</td>
      <td>{{ $delivery->username }}</td>
      <td>{{ $delivery->phone }}</td>
      <td>{{ $delivery->address }}</td>

      </tr>
      @endforeach
    </tbody>
  </table></br>

      
</div>
@include('inc.sidebar')
</body>
@endsection
