@extends('layouts.master')


@section('AppName')
    Bank Management 
@endsection

@section('content')

    <div class="container-fluid py-4">
    @if ($message = Session::get('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
      {{ $message }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
    @endif
    @if ($message = Session::get('error'))
    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="danger:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
      {{ $message }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <strong>  @if(isset($subTitle)) {{ $subTitle }}  @endif </strong>
             
            </div>
            <br/>
            <div class="card-body px-0 pt-0 pb-2">
                  <!--begin::Form-->	
            {!! Form::model($user, ['route' => ['employer.update', $user->id], 'method' => 'put', 'class' => 'm-form m-form--label-align-righ', 'enctype' => 'multipart/form-data']) !!}	
            <!--{!! Form::open(['url' => 'client/user/update', 'method' => 'post', 'class' => 'm-form m-form--label-align-righ', 'enctype' => 'multipart/form-data']) !!}-->	

            <div class="m-portlet__body" style="padding: 2%;">	
                <div class="m-form__section m-form__section--first">	

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Name</label>
                        <div class="col-lg-6">
                            {!! Form::text('name',$user->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">User Name</label>
                        <div class="col-lg-6">
                            {!! Form::text('username', $user->username, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                            {!! $errors->first('username', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Email</label>
                        <div class="col-lg-6">
                            {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>



                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Password</label>
                        <div class="col-lg-6">
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                            {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Confirm Password</label>
                        <div class="col-lg-6">
                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Role</label>
                        <div class="col-lg-6">
                            {!!  Form::select('access',$roles,$user->access, ['class' => 'form-control']) !!}
                            {!! $errors->first('access', '<small class="help-block">:message</small>') !!}
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
          </div>
        </div>
      </div>
    



    <!--Add client Modal-->
      <div style="top: 76px;" class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 858px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Nouveau Employer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">        
        {!! Form::open(['url' => 'panel/employer', 'method' => 'post', 'class' => 'm-form m-form--label-align-righ', 'enctype' => 'multipart/form-data']) !!}	
  
        @csrf
        <div style="    display: grid;
                        column-gap: 35px;
                        grid-template-columns: auto auto auto;">
            <div>
                <label for="inputName" class="col-form-label">Name</label>                
                {!! Form::text('name', null, ['class' => 'form-control m-input', 'placeholder' => 'Name']) !!}
                {!! $errors->first('name', '<small class="m--font-danger">:message</small>') !!}
            </div>
            <div>
                <label for="inputAdresse" class="col-form-label">User Name</label>
                {!! Form::text('username', null, ['class' => 'form-control m-input', 'placeholder' => 'Username']) !!}
                {!! $errors->first('username', '<small class="m--font-danger">:message</small>') !!}
</div>
            <div>
                <label for="inputAccountType" class="col-form-label">Email</label>
                {!! Form::email('email', null, ['class' => 'form-control m-input', 'placeholder' => 'Email']) !!}
                {!! $errors->first('email', '<small class="m--font-danger">:message</small>') !!}
            </div>
            <div>
                <label for="inputAccountNumber" class="col-form-label">Password</label>
                {!! Form::password('password', ['class' => 'form-control m-input', 'placeholder' => 'Password']) !!}
                {!! $errors->first('password', '<small class="m--font-danger">:message</small>') !!}
            </div>
            <div>
                <label for="inputPhone" class="col-form-label">Confirm Password</label>
                {!! Form::password('password_confirmation', ['class' => 'form-control m-input', 'placeholder' => 'Confirm Password']) !!}
            </div>
            <div>
                <label for="inputAdresse" class="col-form-label">Role</label>
                {!!  Form::select('access',$roles,null, ['class' => 'form-control m-input']) !!}
                {!! $errors->first('access', '<small class="m--font-danger">:message</small>') !!}
            </div>

            <div>
                <label for="inputAdresse" class="col-form-label">Photo</label>
                <input type="file" name="photo" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
<!--END Add Emplyer Modal-->


<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 858px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit info employer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="{{ url('employer.update') }}" method="post" enctype="multipart/form-data">       
        @csrf
        @method('PUT')
        <input type='hidden' name="id" id='modal-input-id' class='modal_hiddenid'>
        <div style="    display: grid;
                        column-gap: 35px;
                        grid-template-columns: auto auto auto;">
            <div>
                <label for="inputName" class="col-form-label">Name</label>
                <input type="text" name="Name" id="modal-input-Name" class="form-control" >
            </div>
            <div>
                <label for="inputUsername" class="col-form-label">User Name</label>
                <input type="text" name="Username" id="modal-input-Username" class="form-control" id="inputUsername">
            </div>
            <div>
                <label for="inputAdresse" class="col-form-label">Email</label>
                <input type="email" name="Email" id="modal-input-Email" class="form-control" id="inputEmail">
            </div>
            <div>
                <label for="inputPassword" class="col-form-label">Password</label>
                <input type="text" name="Password" id="modal-input-Password" class="form-control" id="inputPassword">
            </div>
            <div>
                <label for="inputPhone" class="col-form-label">Confirm Password</label>
                <input type="tel" name="phone" id="modal-input-phone" class="form-control" id="inputPhone">
            </div>
            <div>
                <label for="inputAdresse" class="col-form-label">Role</label>
                <input type="text" name="Role" id="modal-input-Role" class="form-control" id="inputRole">
            </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>

</script>
@endsection

@push('script')

@endpush 