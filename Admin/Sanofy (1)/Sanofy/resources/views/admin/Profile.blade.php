@extends('/layouts.app2')
@section('content')
<body>
<div style="margin-top: 80px;margin-left: 500px;margin-right: 350px;">
<h1 style="font-size: 35px; color:#190033;text-align:center;font-weight:bold;"> MY PROFILE</h1><hr>
<table class="table table-border" style="font-size: 25px;">
    <tr>
        <th>ID</th>
        <td>{{$admin->id}}</td>
    </tr>
    <tr>
    <th>NAME</th>
        <td>{{$admin->name}}</td>
    </tr>
    <tr>
    <th>USERNAME</th>
        <td>{{$admin->username}}</td>
    </tr>
    <tr>
    <th>PASSWORD</th>
        <td>{{$admin->password}}</td>
    </tr>
</table></br>
<a style="padding: 10px; width: 55px; font-size: 15px; 
      background:#190033; color:aliceblue;margin-left:280px;" href="{{route('EditProfile')}}">  EDIT</a>
      
</div>
@include('inc.sidebar')
</body>
@endsection
