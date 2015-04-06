@extends('layouts.default')

@section('content')

<div class="container">
    <style>
    body {
        background-image: url("Parquet zona de noche.jpg ");
} 
 
    </style>

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <!-- <form role="form"> -->
        @extends('includes.alerts')
        
        {{ Form::open(['route' => 'update']) }}
            <h2>Update Profile <small> {{ $user->name."'s Profile"}} </small></h2>
            <hr class="colorgraph">
            

            <input type='hidden' name='roles_id' value="<?php echo "$user->roles_id"; ?>" />
            <input type='hidden' name='user_id' value="<?php echo "$user->id"; ?>" />

            <div class="form-group">
                    <input type="text" name="name" id="first_name" class="form-control input-lg" placeholder="Name" tabindex="1">
            </div>

            <div class="form-group">
                    <input type="text" name="fathers_name" id="fathers_name" class="form-control input-lg" placeholder="Father's Name" tabindex="2">
            </div>

            @if($user->roles_id==2)
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <input type="text" name="class" id="first_name" class="form-control input-lg" placeholder="Class:" tabindex="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <input type="text" name="section" id="last_name" class="form-control input-lg" placeholder="Section: A/B/C" tabindex="2">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <input type="text" name="roll" id="first_name" class="form-control input-lg" placeholder="Roll:" tabindex="1">
                    </div>
                </div>
            </div>
            @endif

            @if($user->roles_id==1)
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="designation"  class="form-control input-lg" placeholder="Designation: " tabindex="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="major_sub" class="form-control input-lg" placeholder="Major Subject: " tabindex="2">
                    </div>
                </div>
            </div>
            @endif

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="age" id="first_name" class="form-control input-lg" placeholder="Age: " tabindex="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="gender" id="last_name" class="form-control input-lg" placeholder="Sex: Male/Female" tabindex="2">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="text" name="contact" id="adress" class="form-control input-lg" placeholder="Contact No:" tabindex="3">
            </div>
            
            <div class="form-group">
                <input type="text" name="address" id="adress" class="form-control input-lg" placeholder="Adress" tabindex="3">
            </div>

            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                    </div>
                </div>
            </div>
            
            <hr class="colorgraph">
            <div class="row">
                {{ Form::submit('Update', ['class'=>'btn btn-lg btn-success btn-block']) }}
            
            </div>

        </form>
    </div>
</div>










<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
@stop