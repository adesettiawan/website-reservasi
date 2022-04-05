<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('Login_v9/images/icons/favicon.ico') }}" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v9/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="{{ asset('Login_v9/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="{{ asset('Login_v9/fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v9/vendor/animate/animate.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v9/vendor/css-hamburgers/hamburgers.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v9/vendor/animsition/css/animsition.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v9/vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v9/vendor/daterangepicker/daterangepicker.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v9/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v9/css/main.css') }}">
	<!--===============================================================================================-->
	<style>
		.closeX {
			position: relative;
			right: 150px;
			bottom: 30px;
		}
	</style>
</head>

<body>


	<div class="container-login100" style="background-image: url('{{ asset('img/caffe.jpg') }}');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-30 text-center">
			<a href="/" class="closeX"><i class="zmdi zmdi-arrow-left" style="font-size: 35px;"></i></a><br>
			<img src="https://d1sag4ddilekf6.azureedge.net/compressed/merchants/6-C2XYG4NHTYTXVX/hero/bf27cc9b009b407daf70b6e4ede3612e_1629547798731923560.jpg"
				width="100px" alt="logo" class="mb-2">
			<form class="login100-form validate-form" action="/login" method="POST">
				@csrf
				<span class="login100-form-title p-b-30" style="font-size: 24px">
					Login Admin
				</span>
				@error('email')
				<div class="alert alert-danger" role="alert">
					{{ $errors->first('email')}}
				</div>
				@enderror

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="email" placeholder="email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn badge-blue">
						Login
					</button>
				</div>
			</form>


		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="{{ asset('Login_v9/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('Login_v9/vendor/animsition/js/animsition.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('Login_v9/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('Login_v9/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('Login_v9/vendor/select2/select2.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('Login_v9/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('Login_v9/vendor/daterangepicker/daterangepicker.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('Login_v9/vendor/countdowntime/countdowntime.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('Login_v9/js/main.js') }}"></script>

</body>

</html>