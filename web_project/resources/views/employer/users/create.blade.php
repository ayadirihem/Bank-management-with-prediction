@extends('layouts.master')
@section('content')



<style>
    .m-portlet .m-portlet__body {
        padding: 2.2rem 15rem !important;
    }

    html, body {

        font-size: 15px;

    }
</style>



<div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">

                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon">
                            <i class="flaticon-add-circular-button m--font-danger"></i>
                        </span>
                        <h3 class="m-portlet__head-text m--font-danger">
                            @if(isset($subTitle)) {{ $subTitle }}  @endif
                        </h3>
                    </div>			
                </div>


            </div>
            <!--begin::Form-->

            {!! Form::open(['url' => 'panel/client/user/store', 'method' => 'post', 'class' => 'm-form m-form--label-align-righ', 'enctype' => 'multipart/form-data']) !!}	


            <div class="m-portlet__body">	
                <div class="m-form__section m-form__section--first">	

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Name</label>
                        <div class="col-lg-6">
                            {!! Form::text('name', null, ['class' => 'form-control m-input', 'placeholder' => 'Name']) !!}
                            {!! $errors->first('name', '<small class="m--font-danger">:message</small>') !!}
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">User Name</label>
                        <div class="col-lg-6">
                            {!! Form::text('username', null, ['class' => 'form-control m-input', 'placeholder' => 'Username']) !!}
                            {!! $errors->first('username', '<small class="m--font-danger">:message</small>') !!}
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Email</label>
                        <div class="col-lg-6">
                            {!! Form::email('email', null, ['class' => 'form-control m-input', 'placeholder' => 'Email']) !!}
                            {!! $errors->first('email', '<small class="m--font-danger">:message</small>') !!}
                        </div>
                    </div>


                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Password</label>
                        <div class="col-lg-6">
                            {!! Form::password('password', ['class' => 'form-control m-input', 'placeholder' => 'Password']) !!}
                            {!! $errors->first('password', '<small class="m--font-danger">:message</small>') !!}
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Confirm Password</label>
                        <div class="col-lg-6">
                            {!! Form::password('password_confirmation', ['class' => 'form-control m-input', 'placeholder' => 'Confirm Password']) !!}
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Role</label>
                        <div class="col-lg-6">
                            {!!  Form::select('access',$roles,null, ['class' => 'form-control m-input']) !!}
                            {!! $errors->first('access', '<small class="m--font-danger">:message</small>') !!}
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label" for="exampleInputEmail1">Photo </label>
                        <div class="col-lg-6 custom-file">
                            <input type="file" name="photo" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div> 

                </div>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-6">

                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            <!--end::Form-->
        </div>
        <!--end::Portlet-->

    </div>
</div>
@endsection