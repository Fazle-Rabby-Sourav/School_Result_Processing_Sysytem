<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

<style>
	body {
        background-image: url("Parquet zona de noche.jpg ");
} 
 
	</style>
		<!-- css -->
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/bootstrap-theme.css') }}
		{{ HTML::style('css/custom.css') }} 
		{{ HTML::style('//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css') }}
	</head>


	<!-- <body oncontextmenu="rC:\Users\tasmin\Desktop\SRPS\public\Parquet zona de noche.jpg"> -->
		<!-- <body style="background:#A9A9F5"> -->

	  	<!-- navigation menu -->
	    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<font color = '#8B2500 '>
							<b>School Result Processing System</b>
							
						</font>
						</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ URL::route('home') }}">
							<font color = '#8B2500'> <b> 
								Home
							</b>
						</font>
							
						</a></li>
						<!-- <li><a class="navbar-brand" href="/login">Login</a></li> -->
						@if(!Auth::check())
						 	<li><a href="{{ URL::route('login') }}">

						 		<font color = '#8B2500'> <b> 
								Login
							</b>
						</font>
						 	</a></li>
							
						@else
							<li><a href="{{ URL::route('account', Auth::user()->id) }}"> 
								<font color = "#8B2500 ">
									<b>
										{{ Auth::user()->name."'s " }} Profile
									</b>
								</font>
								
							</a>
						</li>
							<li class="dropdown">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								 	<font color = "#8B2500">
									<b>
										Information
									</b>
								</font>
								 	
								 	<strong class="caret">
								 	</strong>
								 </a>
								<ul class="dropdown-menu">
										<li><a href="{{ URL::route('sectionList') }}">

											<font color= "#8B2500">
												<b>
												Student Database
											</b>
											</font>
											
										</a></li>
										<li><a href="{{ URL::route('teacherList') }}">
											<font color= "#8B2500 ">
												<b>
												Teacher Database
											</b>
											</font>
											</a></li>
										<li class="divider">
										</li>
										@if(Auth::user()->roles_id != 2 )
										<li><a href="{{ URL::route('tabulationList') }}">
											<font color= "#8B2500">
												<b>
												Tabulation Sheet
											</b>
											</font>
											

											
										</a></li>
										@endif
								</ul>
							</li>

							
							
							@if(Auth::user()->roles_id == 4 )
							<li><a href="{{ URL::route('registrationList') }}"><font color= "#8B2500">
												<b>
												Registration
											</b>
											</font>
											</a></li>
							@endif
							<li><a href="{{ URL::route('logout') }}"><font color= "#8B2500">
												<b>
												Logout
											</b>
											</font>
											</a></li>
						@endif

					</ul>
				</div>
			</div>
	    </div>

	    <!-- main content -->
	    <div class="container">
	    	@yield('content')
	    </div>

	   

	    <!-- javascripts -->
	    {{ HTML::script('js/jquery.min.js') }}
	    {{ HTML::script('js/bootstrap.min.js') }} 
	    {{ HTML::script('//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js') }}
	</body>
</html>
