@extends('layouts.default') 

@section('content')


	<div class="container">
		<body style= background-image: url("Parquet zona de noche.jpg ");>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="carousel slide" id="carousel-772300">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-772300" class="active">
					</li>
					<li data-slide-to="1" data-target="#carousel-772463" >
					</li>
					<li data-slide-to="2" data-target="#carousel-772463" >
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<img alt="" src="A.jpg" />
						<div class="carousel-caption">
							<h1>
								
							</h1>
							<p>
								
							</p>
						</div>
					</div>
					<div class="item active">
						<img alt="" src="B.jpg" />
						<div class="carousel-caption">
							<h4>
								
							</h4>
							<p>
								
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="C.jpg" />
						<div class="carousel-caption">
							<h4>
								
							</h4>
							<p>
								
							</p>
						</div>
					</div>
				</div>
				<div>
					<a class="left carousel-control" href="#carousel-772300" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-772463" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			<a class="right carousel-control" href="#carousel-772300" data-slide="prev"><span class="glyphicon glyphicon-chevron-right"></span></a> <a class="left carousel-control" href="#carousel-772463" data-slide="next"><span class="glyphicon glyphicon-chevron-left"></span></a>
			
				</div> 
			</div>
			
			<div class="jumbotron">
				<h1>
					<font color="#8B2500">
					School Result Processing System
					</font>
				</h1>
				<p>
					
					It is a system for the ease of managing and processing the school results.  <br>
					Information of a huge number of students to be needed. <br>
					Storing all information and providing their results take a lot of time as man power is limited. <br>
					so , to ease these matters this system will be helpfull <br>

				</p>
				<p>
					@if(!Auth::check())
					<a class="btn btn-primary btn-large" href="{{ URL::route('login') }}">Enter</a>
					@endif
				</p>
			</div>

		</div>
	</div>
</div>
@stop

