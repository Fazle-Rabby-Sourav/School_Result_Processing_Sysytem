@extends('layouts.default')

@section('content')
<style>
	body {
        background-image: url("Parquet zona de noche.jpg ");
} 
 
	</style>

<div class="container">
	<div class="row">
    	<div class="col-md-5 col-md-offset-0">
    		<div class="page-header">
			    <h3>Registration</h3>
			</div>
			<div class="row">

				
			    	@extends('includes.alerts')
			    	<a href="{{ URL::route('registrationTeacher' ) }}" class="btn btn-mid btn-success">Teacher Registration</a>
			    	<a href="{{ URL::route('registrationStudent' ) }}" class="btn btn-mid btn-success">Student Registration</a>
			</div>

		</div>
	</div>
</div>
@stop