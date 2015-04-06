@extends('layouts.default')

@section('content')
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SCHOOL RESULT PROCESSING SYSTEM</title>
	
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap-theme.css') }}
	{{ HTML::style('css/custom.css') }}
	<style>
	body {
        background-image: url("Parquet zona de noche.jpg ");
} 
 
	</style>
</head>
<!-- body {background-color:lightgray} -->
<body>
	<!-- <body background-image:= "rC:\Users\tasmin\Desktop\SRPS\public\Parquet zona de noche.jpg"> -->
	
	<!-- <body style="background:#A9A9F5"> -->

<div id = "background">
	
</div>

	<div class="container">
		<div class="row clearfix">
			<div class="col-sm-6 col-md-6 col-md-offset-3">
				<div class="page-header">
					<h1><font color ="#8B2500">
						<font color = '#8B2500'> <b> 
								<!-- Home -->
							</b>
						</font>
						<b>
						School Result Processing System
					</b>
					</font>
						
					</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="page-header">
	</div>


	<div class="container" style="margin-top:10px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> 
							<font color = "#8B2500">
								<b>
									Sign in to continue
								</b>
							</font>
							
						</strong>
					</div>
					<div class="panel-body">
						@extends('includes.alerts')
						{{ Form::open(['route' => 'login']) }}
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="yourmail@example.com" name="email" type="text" autofocus>

												<!-- {{ Form::text('email', null,["class"=>"form-control input-lg", "placeholder"=>"yourmail@example.com" , "type"=>"text", "autofocus"]) }} -->

											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Password" name="password" type="password" value="">

											</div>
										</div>
										<div class="form-group">
											
											<!-- <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in"> -->

											{{ Form::submit('Login', ['class'=>'btn btn-lg btn-success btn-block']) }}

										</div>
									</div>
								</div>
							</fieldset>
						{{ Form::close() }}
					</div>
					<div class="panel-footer ">
						<br>
					</div>
                </div>
			</div>
		</div>
	</div>

	 <!-- javascripts -->
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
</body>
<!-- #background {
background-image: url("Parquet zona de noche.jpg");
} -->
</html>
@stop