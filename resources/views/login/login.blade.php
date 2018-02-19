<html>
<head> 
	<title>Login Template</title> 
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}"> 
	<link rel="stylesheet" href="{{asset('/css/custom.css')}}"> 
	<script src="{{asset('/js/jquery-1.11.0.min.js')}}"></script> 
	<script src="{{asset('/js/bootstrap.min.js')}}"></script> 
</head> 
<body>

<div class="container">
	<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 loginbox"> 
	<div class="panel panel-info" > 
		<div class="panel-heading"> 
			<div class="panel-title"> Sign In </div> 
			<div class="forgot-password"> <a href="#">Forgot password?</a> </div> 
		</div> 
		<div class="panel-body panel-pad"> 
			<div id="login-alert" class="alert alert-danger col-sm-12 login-alert"></div> 
		 		 <form class="form-horizontal" id="loginform" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

					<div class="input-group margT25 {{ $errors->has('email') ? ' has-error' : '' }}"> 
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-user"></i>
						</span> 
						<input id="email" type="email" class="form-control" name="email" placeholder="username or email"> 

						  @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                          @endif
                          
					</div> 
					<div class="input-group margT25 {{ $errors->has('password') ? ' has-error' : '' }}"> 
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
						<input id="password" type="password" class="form-control" name="password" placeholder="password"> 
						 @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div> 
					<div class="input-group"> 
						<div class="checkbox"> 
							<label> 
								<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me 
							</label> 
						</div> 
					</div> 
					<div class="form-group margT10"> 
					<!-- Button --> 
						<div class="col-sm-12 controls"> 
							<button id="btn-login" type="submit" class="btn btn-block btn-success">Login </button> 
						</div> 
					</div> 
					
				</form> 
			</div> 
		</div> 
	</div> 
</div> 


</body> 
</html>