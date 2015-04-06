@extends('layouts.default')

@section('content')

    <div class="row">
    	
    	<div class="col-md-4 col-md-offset-4 padding_top">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			  		
<style>

	body {
        background-image: url("Parquet zona de noche.jpg ");
} 
 
	</style>
			    	<h3 class="panel-title"> <b>Update Result</b></h3>
			 	</div>
			  	<div class="panel-body">
			  		

			  		@include('includes/alerts')
			    	<!-- <form accept-charset="UTF-8" role="form"> -->
			    	{{ Form::open(['route' => 'doResultUpdate' ]) }}
			    		


			    		<input type='hidden' name='student_id' value="<?php echo "$student_id"; ?>" />
			    		<input type='hidden' name='term_id' value="<?php echo "$term_id"; ?>" />
			    		<input type='hidden' name='subject_id' value="<?php echo "$subject_id"; ?>" />



			    		<div class="form-group">
			    	  		{{ Form::text('final_mark', null,["class"=>"form-control input-lg", "placeholder"=>"Marks in Exam out of 100"]) }}

			    		    <!-- <input class="form-control" placeholder="yourmail@example.com" name="name" type="text"> -->
			    		</div>
			    	  	<div class="form-group">
			    	  		{{ Form::text('midterm_mark', null,["class"=>"form-control input-lg", "placeholder"=>"Marks in Midterm exam Out of 20"]) }}

			    		    <!-- <input class="form-control" placeholder="yourmail@example.com" name="email" type="text"> -->
			    		</div>

			    		<div class="form-group">
			    	  		{{ Form::text('present_class', null,["class"=>"form-control input-lg", "placeholder"=>"Attendence"]) }}
			    		</div>

			    		<div class="form-group">
			    	  		{{ Form::text('total_class', null,["class"=>"form-control input-lg", "placeholder"=>"Total Class"]) }}
			    		</div>

			    		{{ Form::submit('submit', ['class'=>'btn btn-lg btn-success btn-block']) }}
			    		<!-- {{ Form::submit('submit', ['class="btn btn-primary" ']) }} -->


			    	{{ Form::close() }}
			    </div>
			</div>
		</div>
	</div>
@stop