<!DOCTYPE html>
<html>
<head>
	<title>KHSSSPB | Login</title>
	<link rel="stylesheet" type="text/css" href="csss/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
	<img class="wave" src="imgg/wave.png">
	<div class="container">
		<div class="img">
			<img src="imgg/bg.svg">
		</div>
		<div class="login-content">
			 <form method="POST" action="{{ route('login') }}">
            @csrf
				<img src="imgg/avatar.svg">
				<h2 class="title">Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" id="email"  name="email" :value="old('email')" required autofocus>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password"  class="input" id="password"   name="password" required autocomplete="current-password">
            	   </div>
            	</div>

                <label for="remember_me" >
                    <input type="checkbox" id="remember_me" name="remember" />
                    <span>Remember_me</span>
                </label>

				 @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                @endif

            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="jss/main.js"></script>
</body>
</html>
