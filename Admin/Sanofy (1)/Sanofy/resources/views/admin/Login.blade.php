@extends('/layouts.app1')
@section('content')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/login.css">
</head>
<div class="body">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="{{route('Login')}}" method="post">
            {{csrf_field()}}
                <h1>Login</h1>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="username" value="{{old('username')}}" class="login__input" placeholder="Username"></br>
                    @error('username')
            <span class="text-danger">{{$message}}</span>
        @enderror
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="password" value="{{old('password')}}" class="login__input" placeholder="Password"></br>
                    @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">
				<h3>log in via</h3>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</div>
@endsection
