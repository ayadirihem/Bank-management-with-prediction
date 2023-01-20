@extends('layouts.master')

@section('title')
    Dashboard 
@endsection

@section('PageName')
    Dashboard 
@endsection

@section('AppName')
    Application name
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
                Edit Clients
              </h5>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
    <div class="col-12 mt-4">
          <div class="card mb-4">
            <div class="card-body p-3">
            <form method="post"> 

                <div style="    display: grid;
                                column-gap: 35px;
                                grid-template-columns: auto auto auto;">
                    <div>
                        <label for="inputName" class="col-form-label">Name</label>
                        <input type="text" name="Name" class="form-control" id="inputName">
                    </div>
                    <div>
                        <label for="inputAdresse" class="col-form-label">Adresse</label>
                        <input type="text" name="Adresse" class="form-control" id="inputAdresse">
                </div>
                    <div>
                        <label for="inputAccountType" class="col-form-label">Account type</label>
                        <input type="text" name="AccountType" class="form-control" id="inputAdresse">
                    </div>
                    <div>
                        <label for="inputAccountNumber" class="col-form-label">Account Number</label>
                        <input type="text" name="AccountNumber" class="form-control" id="inputAdresse">
                    </div>
                    <div>
                        <label for="inputPhone" class="col-form-label">Phone number</label>
                        <input type="tel" name="phone" class="form-control" id="inputPhone">
                    </div>
                    <div>
                        <label for="inputAdresse" class="col-form-label">Email</label>
                        <input type="email" name="Email" class="form-control" id="inputAdresse">
                    </div>

                </div>

                </div>
                <br />
                <br />
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button style ="margin-left: 24px; margin-right: 37px;" type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>


            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')

@endsection