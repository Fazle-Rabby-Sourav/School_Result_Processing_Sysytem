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
          Tabulation Sheet  <small> <font color =" black">Class: {{ $class_id }}  Section: {{ $section_id }} </font> </small>
        </h1>
      </div>
    </div>
  </div>
</div>


<h1> 1st Term </h1>

<table id="myTable" class="table table-bordered table-striped">
   <thead>
      <tr>
        <b><th>Roll</th>
         <th>Name</th>
         
         <th>English</th>
         <th>Bangla</th>
         <th>Math</th>
         <th>Religion</th>
         <th>Social Sci</th>
         <th>General Sci</th>
         <th>Attendance</th>
         <th>GPA</th></b>
         
      </tr>
   </thead>
   <tbody>
      @foreach($users as $user)
        <?php $sumGr=0; $subj=0; $gr ; $isFail=0;  ?>
        <tr>
        
            <!-- for calculating attendence -->
            <?php 
              $sum=0;
              $att=0;

              foreach ($user->givenExam as $exm  ) {
                if( $exm->term == '1' )
                {
                  $sum = $sum+ $exm->total_class;
                  $att = $att+ $exm->present_class;
                }
              }
            ?>

           <td>{{$user->roll}}</td>
           <td><a href="{{ URL::route('account', $user->id) }}">{{ $user->name }}</a> </td>
           
           <td>
           <?php 
           foreach ($user->givenExam as $exm): ?>
                  <?php
                      $x= 0;
                      if($exm->subject_id == '1' && $exm->term == '1' )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }

                        $subj=$subj+1;

                        echo $fmark;
                      }
                    ?>
           <?php endforeach ?>
            </td>
            
            <td>
            <?php foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '2'  && $exm->term == '1' )
                      {
                          $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                        
                        $subj=$subj+1;

                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
            </td>
            
            <td><?php foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '3'  && $exm->term == '1' )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                        
                        $subj=$subj+1;

                        echo $fmark;
                      }
                    ?>
           <?php endforeach ?>
            </td>
           
            <td>
            <?php foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '4' && $exm->term == '1' )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                        
                        $subj=$subj+1;
                        
                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
           </td>

           <td>
            <?php if($user->class<3) echo "Not Applicable";
            else
              foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '5' && $exm->term == '1' )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }

                        $subj=$subj+1;
                        

                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
           </td>

           <td>
            <?php if($user->class<3) echo "Not Applicable";
            else
              foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '6' && $exm->term == '1' )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }

                        $subj=$subj+1;


                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
           </td>
            <td>
              {{ $att." / ".$sum }}
            </td>
           
           <td>
              @if($subj!=0 && $isFail==0)
              {{ $sumGr/$subj }}
              @elseif($subj==0)
              {{ 'Not Attended' }}
              @elseif($isFail==0)
              {{ 0.0 }}
              @else
              {{ 0.0 }}
              @endif



           </td>
        </tr>
       @endforeach
   </tbody>
</table>






<!--***************************************** SECOND TERM ********************************************* -->

<br>
<br>
<br>
<h1> 2nd Term </h1>
<table id="myTable" class="table table-bordered table-striped">
   <thead>
      <tr>
         <!-- <th>ID</th> -->
         <th>Roll</th>
         <th>Name</th>
         
         <th>English</th>
         <th>Bangla</th>
         <th>Math</th>
         <th>Religion</th>
         <th>Social Sci</th>
         <th>General Sci</th>
         <th>Attendance</th>
         <th>GPA</th>
      </tr>
   </thead>
   <tbody>
      @foreach($users as $user)
        <?php $sumGr=0; $subj=0; $gr ; $isFail=0;  ?>
        <tr>
        
            <!-- for calculating attendence -->
            <?php 
              $sum=0;
              $att=0;

              foreach ($user->givenExam as $exm ) {
                if($exm->term == '2' )
                {
                  $sum = $sum+ $exm->total_class;
                  $att = $att+ $exm->present_class;
                }
              }
            ?>

           <td>{{$user->roll}}</td>
           <td><a href="{{ URL::route('account', $user->id) }}">{{ $user->name }}</a> </td>
           
           <td>
           <?php foreach ($user->givenExam as $exm): ?>
                  <?php
                      $x= 0;
                      if($exm->subject_id == '1' && $exm->term == '2' )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }

                        $subj=$subj+1;

                        echo $fmark;
                      }
                    ?>
           <?php endforeach ?>
            </td>
            
            <td>
            <?php foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '2' && $exm->term == '2' )
                      {
                          $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                        
                        $subj=$subj+1;

                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
            </td>
            
            <td><?php foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '3' && $exm->term == '2' )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                        
                        $subj=$subj+1;

                        echo $fmark;
                      }
                    ?>
           <?php endforeach ?>
            </td>
           
            <td>
            <?php foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '4' && $exm->term == '2'  )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                        
                        $subj=$subj+1;
                        
                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
           </td>

           <td>
            <?php if($user->class<3) echo "Not Applicable";
            else
            foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '5' && $exm->term == '2' )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }

                        $subj=$subj+1;
                        

                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
           </td>

           <td>
            <?php if($user->class<3) echo "Not Applicable";
            else 
              foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '6' && $exm->term == '2'  )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }

                        $subj=$subj+1;


                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
           </td>
            <td>
              {{ $att." / ".$sum }}
            </td>
           
           <td>


              @if($subj!=0 && $isFail==0)
              {{ $sumGr/$subj }}
              @elseif($subj==0)
              {{ 'Not Attended' }}
              @elseif($isFail==0)
              {{ 0.0 }}
              @else
              {{ 0.0 }}
              @endif


           </td>
        </tr>
       @endforeach
   </tbody>
</table>







<!--***************************************** SECOND TERM ********************************************* -->

<br>
<br>
<br>
<h1>  Annual Exam </h1>
<table id="myTable" class="table table-bordered table-striped">
   <thead>
      <tr>
         <th>Roll</th>
         <th>Name</th>
         
         <th>English</th>
         <th>Bangla</th>
         <th>Math</th>
         <th>Religion</th>
         <th>Social Sci</th>
         <th>General Sci</th>
         <th>Attendance</th>
         <th>GPA</th>
      </tr>
   </thead>
   <tbody>
      @foreach($users as $user)
        <?php $sumGr=0; $subj=0; $gr ; $isFail=0;  ?>
        <tr>
        
            <!-- for calculating attendence -->
            <?php 
              $sum=0;
              $att=0;

              foreach ($user->givenExam as $exm ) {
                if($exm->term == '3' )
                {
                  $sum = $sum+ $exm->total_class;
                  $att = $att+ $exm->present_class;
                }
              }
            ?>

           <td>{{$user->roll}}</td>
           <td><a href="{{ URL::route('account', $user->id) }}">{{ $user->name }}</a> </td>
           
           <td>
           <?php foreach ($user->givenExam as $exm): ?>
                  <?php
                      $x= 0;
                      if($exm->subject_id == '1' && $exm->term == '3' )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }

                        $subj=$subj+1;

                        echo $fmark;
                      }
                    ?>
           <?php endforeach ?>
            </td>
            
            <td>
            <?php foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '2' && $exm->term == '3' )
                      {
                          $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                        
                        $subj=$subj+1;

                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
            </td>
            
            <td><?php foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '3' && $exm->term == '3' )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                        
                        $subj=$subj+1;

                        echo $fmark;
                      }
                    ?>
           <?php endforeach ?>
            </td>
           
            <td>
            <?php foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '4' && $exm->term == '3'  )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }
                        
                        $subj=$subj+1;
                        
                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
           </td>

           <td>
            <?php if($user->class<3) echo "Not Applicable";
            else 
              foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '5' && $exm->term == '3' )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;  }

                        $subj=$subj+1;
                        

                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
           </td>

           <td>
            <?php if($user->class<3) echo "Not Applicable";
            else
            foreach ($user->givenExam as $exm): ?>
                    <?php
                      $x= 0;
                      if($exm->subject_id == '6' && $exm->term == '3'  )
                      {
                        $fmark = ($exm->final_mark*0.8)+$exm->midterm_mark;
                        //$fmark = $exm->final_mark;
                        if($fmark>=80){  $gr= 'A+'; $gr= 'A+' ;   $sumGr+= 5;}
                        else if($fmark>=70 && $fmark<80){ $gr= 'A' ;   $sumGr+= 4;   }
                        else if($fmark>=60 && $fmark<70){ $gr= 'A-';   $sumGr+= 3.5; }
                        else if($fmark>=50 && $fmark<60){ $gr= 'B' ;   $sumGr+= 3;   }
                        else if($fmark>=40 && $fmark<50){ $gr= 'C' ;   $sumGr+= 2;   }
                        else if($fmark>=33 && $fmark<40){ $gr= 'D' ;   $sumGr+= 1;   }
                        else  if($fmark>=0 && $fmark<33){   $isFail=1; $gr='F' ;     }

                        $subj=$subj+1;


                        echo $fmark;
                      }
                    ?>
             <?php endforeach ?>
           </td>
            <td>
              {{ $att." / ".$sum }}
            </td>
           
           <td>
              @if($subj!=0 && $isFail==0)
              {{ $sumGr/$subj }}
              @elseif($subj==0)
              {{ 'Not Attended' }}
              @elseif($isFail==0)
              {{ 0.0 }}
              @else
              {{ 0.0 }}
              @endif


           </td>
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