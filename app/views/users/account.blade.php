@extends('layouts.default')

@section('content')
    
    <div class="container">

      <div class="row">



    <div class="container">

    <style>
  body {
        background-image: url("{{URL::to('Parquet zona de noche.jpg ');}}");
} 
 
  </style>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="page-header">
                    <h1>
                      <b>
                        <font color= "#8B2500">  {{ $user->name."'s Profile" }} </font>
                      
                      </b>
                        
                    </h1>
                </div>
            </div>
        </div>
    </div>


         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">

            <div class="panel-heading">
                @if($user->roles_id=='1')
                <h3 class="panel-title">
                  <b>
                      {{ $user->name." - Teacher" }}
                  </b>
                 
                </h3>
                @endif
                @if($user->roles_id=='2')
                <h3
                
                 class="panel-title">
                 <b>
                 {{ $user->name." - Student" }}
               </b>
               </h3>
                @endif
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                        <tr>
                            <td><b>Name:</b></td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td><b>Email Adress:</b></td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td> <b>Father's Name:</b></td>
                            <td>{{ $user->fathers_name }}</td>
                        </tr>

                         <tr>
                            <td><b>Gender</b></td>
                            <td>{{ $user->gender }}</td>
                        </tr>
                        
                        <!-- for teacher -->
                        @if($user->roles_id==1)
                        <tr>
                            <td> <b>Designation</b> </td>
                            <td>{{ $user->designation }}</td>
                        </tr>
                            
                        <tr>
                            <td> <b>Major Teaching Subject</b> </td>
                            <td>{{ $user->major_sub }} </td>
                        </tr>
                        @endif

                        <!-- for Students -->
                        @if($user->roles_id==2)
                        <tr>
                            <td> <b>Class</b></td>
                            <td>{{ $user->class }}</td>
                        </tr>
                            
                        <tr>
                            <td> <b>Section</b></td>
                            <td>{{ $user->section }} </td>
                        </tr>
                        <tr>
                            <td><b>Roll</b></td>
                            <td>{{ $user->roll }} </td>
                        </tr>

                        @endif




                        <tr>
                            <td> <b>Home Address</b></td>
                            <td>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <td> <b>Age</b> </td>
                            <td>{{ $user->age }}</td>
                        </tr>
                            
                        <tr>
                            <td> <b>Phone Number</b></td>
                            <td>{{ $user->contact }} </td>
                        </tr>


                     
                    </tbody>
                  </table>
                  
                
                  @if( Auth::user()->roles_id == 4 || ( Auth::user()->id == $user->id  && Auth::user()->roles_id == 1) )
                  <a href="{{ URL::route('update_profile' , $user->id ) }}" class="btn btn-primary"><b>Update Profile</b></a>
                  @endif

                  @if( (Auth::user()->roles_id == 1 && $user->roles_id==2)   )
                  <a href="{{ URL::route('resultInput', array( $user->id , Auth::user()->id) ) }}" class="btn btn-primary"><b>Input Result</b></a>
                  @endif
                  
                   <!-- @if( $user->roles_id==2 && ( (Auth::user()->roles_id != 2 ) || (Auth::user()->id==$user->id) ) )
                  <a href="{{ URL::route( 'result', $user->id ) }}" class="btn btn-primary">Result</a>
                  @endif -->

                  <!-- only Admin can remove -->
                  @if( Auth::user()->roles_id == 4 )
                  <a href="{{ URL::route( 'remove', $user->id ) }}" class="btn btn-danger"> <b>Remove</b></a>
                  @endif



                </div>
              </div>
            </div>
            
            <div class="panel-footer">
                <br>

            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-12">
           

        </div>
    </div>







<!-- 

    Result

 -->




@if( ($user->roles_id == 2 && Auth::user()->roles_id !=2) || ($user->id == Auth::user()->id && Auth::user()->roles_id ==2 ) )

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<body>
     

</body>


<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="page-header">
        <h1>
          <b>
            <font color "black">
             Result  of 
            </font>
         
          <small> <font color = "black">{{ $user->name }}</font>  </small>
        </b>
        </h1>
      </div>
    </div>
  </div>
</div>





<br> <br> 
<h1> <b> <font color = "black">
First Term</font>  </b> </h1>
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
   <!-- <TABLE BORDER="15" CELLPADDING="1" CELLSPACING="1" BORDERCOLOR="006699"> -->
   <!-- <table border=5 bordercolorlight=green bordercolordark=blue>  -->
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
        
        
        @if($cntExam==1)
          
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
           <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-81798" href="#panel-element-740952"> <b>
            Click Here to see CGPA</b>
             </a>
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
<h1> <b> <font color "black">Second Term</font> </b> </h1>
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
  <!-- <TABLE BORDER="25" CELLPADDING="1" CELLSPACING="1" BORDERCOLOR="006699"> -->
   
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
        
        @if($cntExam==1)
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
           <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-81798" href="#panel-element-740953"> <b>
            Click Here to see CGPA</b> </a>
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
<h1>
  <b> <font color = "black">Third/Annual Term</font></b>
 </h1>
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
  <!-- <TABLE BORDER="25" CELLPADDING="1" CELLSPACING="1" BORDERCOLOR="006699"> -->
   
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
          
        @if($cntExam==1)
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
           <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-81798" href="#panel-element-740954">
            <!-- <body bgcolor="#E6E6FA"> -->
            <b>
           <font color "black">Click Here to see CGPA</font> </b>

          <!-- </body> -->
             </a>
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


    @endif































@stop