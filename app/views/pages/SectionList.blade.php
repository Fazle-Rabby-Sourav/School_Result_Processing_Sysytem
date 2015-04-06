@extends('layouts.default')

@section('content')

<div class="container">
	<style>
	body {
        background-image: url("Parquet zona de noche.jpg");
} 
 
	</style>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="panel-group" id="panel-526023">
				
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-526023" href="#panel-element-138630">
						 	<font color ="#8B2500">
						 		<b>
						 			Class One
						 		</b>
						 	</font>
						 	
						 </a>
					</div>
					<div id="panel-element-138630" class="panel-collapse in">
						<div class="panel-body">
							<a href="{{ URL::route('studentList',  array('1', '1') ) }}"> <font color = "#8B2500"> Section: A </font></a> <br>
							<a href="{{ URL::route('studentList',  array('1', '1') ) }}"><font color = "#8B2500"> Section: B </font></a> <br>
							<a href="{{ URL::route('studentList',  array('1', '1') ) }}"><font color = "#8B2500"> Section: B </font></a>
						</div>
					</div>
				</div>




				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-526023" href="#panel-element-138632">
							<font color ="#8B2500">
						 		<b>
						 			Class Two
						 		</b>
						 	</font>
						 	</a>
					</div>
					<div id="panel-element-138632" class="panel-collapse in">
						<div class="panel-body">
							<a href="{{ URL::route('studentList',  array('2', '1') ) }}"><font color = "#8B2500"> Section: A </font> </a> <br>
							<a href="{{ URL::route('studentList',  array('2', '2') ) }}"><font color = "#8B2500"> Section: B </font> </a> <br>
							<a href="{{ URL::route('studentList',  array('2', '3') ) }}"><font color = "#8B2500"> Section: C </font> </a>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-526023" href="#panel-element-138633">
						 	<font color ="#8B2500">
						 		<b>
						 			Class Three
						 		</b>
						 	</font>
						 </a>
					</div>
					<div id="panel-element-138633" class="panel-collapse in">
						<div class="panel-body">
							<a href="{{ URL::route('studentList',  array('3', '1') ) }}"><font color = "#8B2500"> Section: A </font> </a> <br>
							<a href="{{ URL::route('studentList',  array('3', '2') ) }}"><font color = "#8B2500"> Section: B  </font> </a> <br>
							<a href="{{ URL::route('studentList',  array('3', '3') ) }}"><font color = "#8B2500"> Section: C  </font> </a>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-526023" href="#panel-element-138634">
						 	<font color ="#8B2500">
						 		<b>
						 			Class Four
						 		</b>
						 	</font>
						 </a>
					</div>
					<div id="panel-element-138634" class="panel-collapse in">
						<div class="panel-body">
							<a href="{{ URL::route('studentList',  array('4', '1') ) }}"><font color = "#8B2500"> Section: A  </font> </a> <br>
							<a href="{{ URL::route('studentList',  array('4', '2') ) }}"><font color = "#8B2500"> Section: B </font> </a> <br>
							<a href="{{ URL::route('studentList',  array('4', '3') ) }}"><font color = "#8B2500"> Section: C</font>  </a>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-526023" href="#panel-element-138635">
						 	<font color ="#8B2500">
						 		<b>
						 			Class Five
						 		</b>
						 	</font>
						 </a>
					</div>
					<div id="panel-element-138635" class="panel-collapse in">
						<div class="panel-body">
							<a href="{{ URL::route('studentList',  array('5', '1') ) }}"><font color = "#8B2500"> Section: A  </font></a> <br>
							<a href="{{ URL::route('studentList',  array('5', '2') ) }}"><font color = "#8B2500"> Section: B  </font></a> <br>
							<a href="{{ URL::route('studentList',  array('5', '3') ) }}"><font color = "#8B2500"> Section: C  </font></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>



@stop