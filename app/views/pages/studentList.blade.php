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
          <b>
           <font color = "black"> Student's Information: Class: {{ $class_id }} :::  </font> </b>
         
          <small>
            <font color = "black">

            Student list of Section: {{ $section_id }} 
            </font>
             </small>
        </h1>
      </div>
    </div>
  </div>
</div>


<table id="myTable" class="table table-bordered table-striped" >
  <!-- <TABLE BORDER="20" CELLPADDING="20" CELLSPACING="10" bordercolorlight=green bordercolordark=blue> -->
  <!-- <table border=5 bordercolorlight=green bordercolordark=blue>  -->
   
   <thead>
      <tr>
         <th><b>Roll</b></th>
         <th>Name</th>
         <th>E-mail</th>
         <th>Father's Name</th>
         <th>Adress</th>
         <th>Contact</th>
      </tr>
   </thead>
   
   <tbody>
         
        @foreach ($users as $user)
        
        
          <tr >
             <th>{{ $user->roll }}</th>
             <td><a href="{{ URL::route('account', $user->id) }}">{{ $user->name }}</a> </td>
             <th>{{ $user->email }}</th>
             <th>{{ $user->fathers_name }}</th>
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
   
    // <TABLE BORDER="20" CELLPADDING="20" CELLSPACING="10" bordercolorlight=green bordercolordark=blue> 
  
</script>

@stop
