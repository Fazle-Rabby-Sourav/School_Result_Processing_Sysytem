@extends('layouts.default')

@section('content')
    <div class="row">
   <style>
  body {
        background-image: url("{{URL::to('Parquet zona de noche.jpg ');}}");
} 
 
  </style>
    	<div class="col-md-4 col-md-offset-4 padding_top">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"> <b>Input Result</b></h3>
			 	</div>
			  	<div class="panel-body">
			  		@include('includes/alerts')
			    	<!-- <form accept-charset="UTF-8" role="form"> -->
			    	{{ Form::open(['route' => 'doResultInput' ]) }}
			    		


			    		<div class="radio">
							  <label>
							    	<input type="radio" name="term" id="optionsRadios1" value="1" checked>
							   		<b>1st Term</b>
							  </label>
						</div>


			    		<div class="radio">
							  <label>
								    <input type="radio" name="term" id="optionsRadios2" value="2">
								   <b>2nd Term</b> 
							  </label>
						</div>

						<div class="radio">
							  <label>
							    	<input type="radio" name="term" id="optionsRadios3" value="3">
							   		<b>Annual</b>
							   		
							  </label>
						</div>


			    		<input type='hidden' name='student_id' value="<?php echo "$student_id"; ?>" />
			    		<input type='hidden' name='teacher_id' value="<?php echo "$teacher_id"; ?>" />

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

			    		<div class="radio">
							  <label>
							    	<input type="radio" name="subject_id" id="optionsRadios1" value="1" checked>
							   		<b>English</b>
							  </label>
						</div>


			    		<div class="radio">
							  <label>
								    <input type="radio" name="subject_id" id="optionsRadios2" value="2">
								   <b>Bangla</b> 
							  </label>
						</div>

						<div class="radio">
							  <label>
							    	<input type="radio" name="subject_id" id="optionsRadios3" value="3">
							   		<b>Math</b>
							  </label>
						</div>


			    		<div class="radio">
							  <label>
								    <input type="radio" name="subject_id" id="optionsRadios4" value="4">
								   
								   <b>Religion</b> 
							  </label>
						</div>

						@if($user->class >2)
						<div class="radio">
							  <label>
							    	<input type="radio" name="subject_id" id="optionsRadios5" value="5" >
							   		<b>Social Science</b>
							  </label>
						</div>


			    		<div class="radio">
							  <label>
								    <input type="radio" name="subject_id" id="optionsRadios6" value="6">
								   <b> General Science</b>
							  </label>
						</div>
						@endif


			    		{{ Form::submit('submit', ['class'=>'btn btn-lg btn-success btn-block']) }}

			    	{{ Form::close() }}
			    </div>
			</div>
		</div>
	</div>
@stop