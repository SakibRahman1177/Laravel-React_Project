@extends('/layouts.app2')
@section('content')

<div style="margin-top: 50px;margin-left: 600px;font-size: 20px;">
<legend style="font-size: 40px;margin-left: 130px;color: indigo;">Edit Profile</legend>
<form action="{{route('EditProfile')}}" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

<div class="pad">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</br></div>
<div>
        <span>Id &nbsp;</span></br>
        <input type="text" name="id" value="{{$admin->id}}" size="40"></br>
        <!-- @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
         --></br>
    </div>
    <div>
        <span>Name &nbsp;</span></br>
        <input type="text" name="name" value="{{$admin->name}}" size="40"></br>
        <!-- @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
         --></br>
    </div>

    <div>
        <span>USERNAME &nbsp;</span></br>
        <input type="text" name="username" value="{{$admin->username}}" size="40"></br>
        <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
         </br>
    </div>

    <div>
        <span>PASSWORD &nbsp;</span></br>
        <input type="text" name="password" value="{{$admin->password}}" size="40"></br>
        </br>
    </div></br>
      <button name="submit" type="submit" id="submit" style="padding: 5px;
    width: 48%;
    font-size: 15px;
    background: #190033;
    color: aliceblue;">Update</button>
</form>
</div>
@include('inc.sidebar')
@endsection