<!doctype html>
<html lang="en">
  <head>
  	<title>ก๋วยเตี๋ยวหมุตุ๋น</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('authen/css/style.css') }}">

	</head>
	<body class="img js-fullheight" style="background-image: url(authen/images/forgot.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Forgot your password</h2>
                    <h6 style="color: azure;">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h6>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	       <h2 style="color: #fff;" class="mb-4 text-center"></h2>

                         <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
                        <form class="signin-form" method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <input style="background-color: rgba(0, 0, 0, 0.589)" type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                        
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Email Password Reset Link</button>
                            </div>

                            <div class="form-group d-md-flex">
                                <div class="w-50 text-md-left">
                                    <a href="{{ route('login') }}" style="color: #fff">Sing in now</a>
                                </div>
                            </div>
                                    
                        </form>
	                        
		            </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('authen/js/jquery.min.js') }}"></script>
  <script src="{{ asset('authen/js/popper.js') }}"></script>
  <script src="{{ asset('authen/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('authen/js/main.js') }}"></script>

	</body>
</html>

