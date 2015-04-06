@extends('layouts.default') 

@section('content')


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<body>
	<style>
  body {
        background-image: url("{{URL::to('Parquet zona de noche.jpg ');}}");
} 
 
  </style>

</body>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="page-header">
        <h1>
          <font color = '#8B2500'>
            <b>  Teacher's Information </b>
          </font>
        
        </h1>
      </div>
    </div>
  </div>
</div>


<table id="myTable" class="table table-bordered table-striped" >
   <thead>
      <tr>
         <th>Name</th>
         <th>E-mail</th>
         <th>Father's Name</th>
          <th>Designation</th>
          <th>Major Teaching Subject</th>
         <th>Adress</th>
         <th>Contact</th>
      </tr>
   </thead>
   
   <tbody>
         
        @foreach ($users as $user)
        
        
          <tr >

             <td><a href="{{ URL::route('account', $user->id) }}">{{ $user->name }}</a> </td>
             <!-- <th>{{ $user->name }}</th> -->
             <th>{{ $user->email }}</th>
             <th>{{ $user->fathers_name }}</th>
             <th>{{ $user->designation }}</th>
             <th>{{ $user->major_sub }}</th>
             <th>{{ $user->address }}</th>
             <th>{{ $user->contact }}</th>
          </tr>
          
          

         
         @endforeach
   </tbody>
</table>











<script type="text/javascript">
   $(document).ready(function(){

       $('#myTable').DataTable({
        "sDom": "<'row'<'span8'l><'span8'f>r>t<'row'<'span8'i><'span8'p>>"
       });


   });
   
</script>

@stop
