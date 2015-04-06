@extends('layouts.default') 

@section('content')


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<body>
<font color ='#8B2500'><b>Results</b></font> 
	 <style>
  body {
        background-image: url("Parquet zona de noche.jpg ");
} 
 
  </style>

</body>


<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="page-header">
        <h1>
          <font color = '#8B2500'>Result  of <small> {{ $user->name }} </small></font>
          
        </h1>
      </div>
    </div>
  </div>
</div>





<br> <br> 
<h1>
  <font></font>
<b>First Term</b> </h1>
<br>


<?php $nowTerm='1';
?>

<!-- for calculating attendence -->
<?php 
  $sum=0;
  $att=0;

  foreach ($user->givenExam as $exm) {
    if($exm->term == $nowTerm){
      $sum = $sum+ $exm->total_class;
      $att = $att+ $exm->present_class;
    }
  }
?>

<table id="myTable" class="table table-bordered table-striped" >
   <thead>
      <tr>
         <!-- <th>ID</th> -->
         <th>Subject</th>
         <th>Exam Marks</th>
         <th>Midterm Marks</th>
         <th>Final Marks</th>
         <th>Grade</th>
         @if(Auth::user()->roles_id != 2 && Auth::user()->roles_id != 3)
         <th>Modify</th>
         @endif
      </tr>
   </thead>
   
   <?php $gpa=0; $sumGr=0; $subj=0; $isFail=0 ;  ?>
   <tbody>
         
        @for($i=1; $i<='6'; $i++)
        


        <?php        $sub='NULL'; $emark=0;  $mmark=0; $fmark=0; $gr='F'; $cntExam=0;    

        foreach ($user->givenExam as $exm)
        {

              if( ($exm->term == '1')  && ($exm->subject_id== $i) && ($exm->term == $nowTerm) ){

                $cntExam = $cntExam+1; 
                $sub=$exm->examSubject->title;
                $emark= $exm->final_mark; 
                $mmark= $exm->midterm_mark;
                $fmark= (($emark*0.8) + ($mmark)) ;

                if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                
                $subj++;
            }
        } 
            

        ?>
        
        
          
          @if($i%2==0)
          <tr class="gradeA even">
             <th>{{ $sub   }}</th>
             <th>{{ $emark }}</th>
             <th>{{ $mmark }}</th>
             <th>{{ $fmark }}</th>
             <th>{{ $gr }}</th>
             @if(Auth::user()->roles_id != 2 && Auth::user()->roles_id != 3)
             <th>
            @if($cntExam!=0)
            <a href="{{ URL::route('resultUpdate', array( $user->id , 1 , $i  ) )  }}" class="btn btn-primary">Update Result</a>
            @endif
            </th>
            @endif
          </tr>
          @endif

          @if($i%2==1)
          <tr class="gradeA odd">
             <th>{{ $sub   }}</th>
             <th>{{ $emark }}</th>
             <th>{{ $mmark }}</th>
             <th>{{ $fmark }}</th>
             <th>{{ $gr }}</th>
            @if(Auth::user()->roles_id != 2 && Auth::user()->roles_id != 3)
            <th>
            @if($cntExam!=0)
            <a href="{{ URL::route('resultUpdate', array( $user->id , 1 , $i  ) )  }}" class="btn btn-primary">Update Result</a>
            @endif
            </th>
            @endif
          </tr>
          @endif
        
        

         
         @endfor

         
         <?php  
                if ($isFail==1) {
                    $gpa= 'You have failed';  
                }
                elseif($subj!=0)$gpa= ($sumGr/$subj) ;
                
          ?>

   </tbody>
</table>

<br>
<div class="row clearfix">
  <div class="col-md-12 column">
    <div class="panel-group" id="panel-81798">
      <div class="panel panel-default">
        <div class="panel-heading">
           <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-81798" href="#panel-element-740952"> Click Here to see your own CGPA </a>
        </div>
        <div id="panel-element-740952" class="panel-collapse collapse">
          <div class="panel-body">
            <h3>Total GPA: {{ $gpa }} </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







<br> <br> 
<h1> <b>Second Term</b></h1>
<br>


<?php $nowTerm='2';
?>

<!-- for calculating attendence -->
<?php 
  $sum=0;
  $att=0;

  foreach ($user->givenExam as $exm) {
    if($exm->term == $nowTerm){
      $sum = $sum+ $exm->total_class;
      $att = $att+ $exm->present_class;
    }
  }
?>

<table id="myTable" class="table table-bordered table-striped" >
   <thead>
      <tr>
         <!-- <th>ID</th> -->
         <th>Subject</th>
         <th>Exam Marks</th>
         <th>Midterm Marks</th>
         <th>Final Marks</th>
         <th>Grade</th>
         @if(Auth::user()->roles_id != 2 && Auth::user()->roles_id != 3)
         <th>Modify</th>
         @endif
      </tr>
   </thead>
   
   <?php $gpa=0; $sumGr=0; $subj=0; $isFail=0; ?>
   <tbody>
         
        @for($i=1; $i<='6'; $i++)
        
        <?php        $sub='NULL'; $emark=0;  $mmark=0; $fmark=0; $gr='F';  $isFail=0; $cntExam =0;     

        foreach ($user->givenExam as $exm)
        {     
              if( ($exm->term == '2')  && ($exm->subject_id== $i) && ($exm->term == $nowTerm) ){

                $cntExam = $cntExam+1;
                $sub=$exm->examSubject->title;
                $emark= $exm->final_mark; 
                $mmark= $exm->midterm_mark;
                $fmark= (($emark*0.8) + ($mmark)) ;

                if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                
                $subj++;
            }
        } 
            

        ?>
          
          @if($i%2==0)
          <tr class="gradeA even">
             <th>{{ $sub   }}</th>
             <th>{{ $emark }}</th>
             <th>{{ $mmark }}</th>
             <th>{{ $fmark }}</th>
             <th>{{ $gr }}</th>
             @if(Auth::user()->roles_id != 2 && Auth::user()->roles_id != 3)
             <th>
            @if($cntExam!=0)
            <a href="{{ URL::route('resultUpdate', array( $user->id , 1 , $i  ) )  }}" class="btn btn-primary">Update Result</a>
            @endif
            </th>
            @endif
          </tr>
          @endif

          @if($i%2==1)
          <tr class="gradeA odd">
             <th>{{ $sub   }}</th>
             <th>{{ $emark }}</th>
             <th>{{ $mmark }}</th>
             <th>{{ $fmark }}</th>
             <th>{{ $gr }}</th>
             @if(Auth::user()->roles_id != 2 && Auth::user()->roles_id != 3)
             <th>
            @if($cntExam!=0)
            <a href="{{ URL::route('resultUpdate', array( $user->id , 1 , $i  ) )  }}" class="btn btn-primary">Update Result</a>
            @endif
            </th>
            @endif
          </tr>
          @endif
          

         
         @endfor

         
         <?php   if ($isFail==1) {
                    $gpa= 'You have failed';  
                }
                elseif($subj!=0)$gpa= ($sumGr/$subj) ; ?>

   </tbody>
</table>

<br>
<div class="row clearfix">
  <div class="col-md-12 column">
    <div class="panel-group" id="panel-81798">
      <div class="panel panel-default">
        <div class="panel-heading">
           <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-81798" href="#panel-element-740953"> Click Here to see your own CGPA </a>
        </div>
        <div id="panel-element-740953" class="panel-collapse collapse">
          <div class="panel-body">
            <h3>Total GPA: {{ $gpa }} </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







<br> <br> 
<h1> <b>Third/Annual Term</b> </h1>
<br>


<?php $nowTerm='3';
?>

<!-- for calculating attendence -->
<?php 
  $sum=0;
  $att=0;

  foreach ($user->givenExam as $exm) {
    if($exm->term == $nowTerm){
      $sum = $sum+ $exm->total_class;
      $att = $att+ $exm->present_class;
    }
  }
?>

<table id="myTable" class="table table-bordered table-striped" >
   <thead>
      <tr>
         <!-- <th>ID</th> -->
         <th>Subject</th>
         <th>Exam Marks</th>
         <th>Midterm Marks</th>
         <th>Final Marks</th>
         <th>Grade</th>
         @if(Auth::user()->roles_id != 2 && Auth::user()->roles_id != 3)
         <th>Modify</th>
         @endif
      </tr>
   </thead>
   
   <?php $gpa=0; $sumGr=0; $subj=0; $isFail=0; ?>
   <tbody>
         
        @for($i=1; $i<='6'; $i++)
        
        

        <?php        $sub='NULL'; $emark=0;  $mmark=0; $fmark=0; $gr='F'; $cntExam=0;    

        foreach ($user->givenExam as $exm)
        {     
              if( ($exm->term == '3')  && ($exm->subject_id== $i) && ($exm->term == $nowTerm) ){

                $cntExam = $cntExam+1;
                $sub=$exm->examSubject->title;
                $emark= $exm->final_mark; 
                $mmark= $exm->midterm_mark;
                $fmark= (($emark*0.8) + ($mmark)) ;

                if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                
                $subj++;
            }
        } 
            

        ?>
          

          @if($i%2==0)
          <tr class="gradeA even">
             <th>{{ $sub   }}</th>
             <th>{{ $emark }}</th>
             <th>{{ $mmark }}</th>
             <th>{{ $fmark }}</th>
             <th>{{ $gr }}</th>
             @if(Auth::user()->roles_id != 2 && Auth::user()->roles_id != 3)
             <th>
            @if($cntExam!=0)
            <a href="{{ URL::route('resultUpdate', array( $user->id , 1 , $i  ) )  }}" class="btn btn-primary">Update Result</a>
            @endif
            </th>
            @endif
          </tr>
          @endif

          @if($i%2==1)
          <tr class="gradeA odd">
             <th>{{ $sub   }}</th>
             <th>{{ $emark }}</th>
             <th>{{ $mmark }}</th>
             <th>{{ $fmark }}</th>
             <th>{{ $gr }}</th>
             @if(Auth::user()->roles_id != 2 && Auth::user()->roles_id != 3)
             <th>
            @if($cntExam!=0)
            <a href="{{ URL::route('resultUpdate', array( $user->id , 1 , $i  ) )  }}" class="btn btn-primary">Update Result</a>
            @endif
            </th>
            @endif
          </tr>
          @endif
          

         
         @endfor

         
         <?php   if ($isFail==1) {
                    $gpa= 'You have failed';  
                }
                elseif($subj!=0)$gpa= ($sumGr/$subj) ; ?>

   </tbody>
</table>

<br>
<div class="row clearfix">
  <div class="col-md-12 column">
    <div class="panel-group" id="panel-81798">
      <div class="panel panel-default">
        <div class="panel-heading">
           <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-81798" href="#panel-element-740954"> Click Here to see your own CGPA </a>
        </div>
        <div id="panel-element-740954" class="panel-collapse collapse">
          <div class="panel-body">
            <h3>Total GPA: {{ $gpa }} </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


















<script type="text/javascript">
   $(document).ready(function(){

       $('#myTable').DataTable({
        "sDom": "<'row'<'span8'l><'span8'f>r>t<'row'<'span8'i><'span8'p>>"
       });


   });
   
</script>

@stop
