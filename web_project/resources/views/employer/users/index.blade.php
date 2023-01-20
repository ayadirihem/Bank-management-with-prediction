@extends('layouts.master')

@section('title')
    Dashboard 
@endsection

@section('PageName')
    Employer 
@endsection

@section('AppName')
    Bank Management
@endsection

@section('content')
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(453.000000, 454.000000)">
                        <path class="color-background opacity-6" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                        <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
              @if(isset($subTitle)) {{ $subTitle }}  @endif
              </h5>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                              </path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <span class="ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Nouveau Employer</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
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
              <h6>  </h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">             
                <table id ="tab_Employer" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">photo</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                      <th class="text-secondary opacity-7">Actions</th>                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @foreach ($users as $user)
                    <?php
                    if (isset($user->photo))
                        $image = $user->photo;
                    else
                        $image = 'introuvable.png';
                    ?>
                    <td class="align-middle text-center text-sm">
                        <img src="{{ '../../users/'.$image }}"  class="responsive-img left" height="50" width="50" alt="current" id="alert_<?php echo $user->id; ?>" onclick="show_picture(<?php echo $user->id; ?>, '<?php echo $image; ?>')">
                    </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{  $user->name }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                          </div>
                        </div>
                      </td>                      
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{ $user->username }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $user->email }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $user->access }}</span>
                      </td>                      

                      <td class="text-center">


                        <a data-bs-toggle="modal" 
                          data-bs-target="#edit-modal-Employer" 
                          data-id="{{$user->id}}" 
                          data-name = "{{ $user->name }}"
                          data-username = "{{ $user->username}}"
                          data-email = "{{ $user->email}}"
                          data-role = "{{ $user->access}}" target="_blank" class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" title="Edit details">	
                            <i class="la la-edit">Edit details</i>				
                        </a>	
                        <form action="{{ route('employer.destroy',$user) }}" method="post" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                          @csrf
                            @method('DELETE')
                            <button type="submit"  data-toggle="tooltip" data-original-title="Delete user" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet empolyer ?')" class="font-weight-bold" style="background: transparent;
                              border: none;color:red; text-transform: uppercase;">
                            Delete
                          </button>
                          
                        </form>	                                             
                 
                        @if($user->active==1) 
                        <a href="{{ route('employer.disable',$user->id) }}"  class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" title="desactivate">	
                            <i class="fa fa-thumbs-down"></i>				
                        </a>
                        @else
                        <a href="{{ route('employer.enable',$user->id) }}"  class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" title="activate">	
                            <i class="fa fa-thumbs-up"></i>				
                        </a>
                        @endif


                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <br />
              </div>
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


<div class="modal fade" id="edit-modal-Employer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <div class="form-group m-form__group row">
                        <label class="col-form-label">Password</label>
                        <div style="margin-left: 4px;">
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                            {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
</div>
                    </div>
            <div>
                <label for="PWD" class="col-form-label">Confirm Password</label>
                {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
            </div>
            <div>
                <label for="inputAdresse" class="col-form-label">Role</label>
                <input type="text" name="Role" id="modal-input-Role" class="form-control" id="inputRole">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $('#tab_Employer').DataTable();
});

</script>
@endsection

@push('script')

@endpush 