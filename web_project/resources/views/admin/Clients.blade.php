@extends('layouts.master')

@section('title')
    Dashboard 
@endsection

@section('PageName')
    Clients 
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
                Clients
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
                    <span class="ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Add new Client</span>
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
          <strong>Whoops!</strong> Il y a eu des problèmes avec votre participation.<br><br>
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
              <h6>Clients table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Adresse</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">AccountType</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">AccountNumero</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @foreach($clients as $item)
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{  $item->Name }}</h6>
                            <p class="text-xs text-secondary mb-0">{{  $item->Email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{  $item->Adresse }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{  $item->AccountType }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{  $item->AccountNumber }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{  $item->phone }}</span>
                      </td>
                      <td class="align-middle">
                      <button 
                          type="button" 
                          data-bs-toggle="modal" 
                          data-bs-target="#edit-modal" 
                          data-id="{{$item->id}}" 
                          data-name = "{{ $item->Name }}"
                          data-adresse = "{{ $item->Adresse}}"
                          data-accounttype = "{{ $item->AccountType}}"
                          data-accountnumber = "{{ $item->AccountNumber}}"
                          data-phone = "{{ $item->phone}}"
                          data-email = "{{ $item->Email}}"
                          class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit client"
                          style="
                              padding-right: 12px
                              background: transparent;
                              border: none;" >
                             Edit
                          </button>
                        <form action="{{ route('Clients.destroy',$item) }}" method="post">
                          @csrf
                            @method('DELETE')
                            <button type="submit"  data-toggle="tooltip" data-original-title="Delete user" class="text-secondary font-weight-bold text-xs" style="background: transparent;
                              border: none;">
                            Supprime
                          </button>
                          
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('Clients.store',$item) }}" method="post"> 
        @csrf
        <div style="    display: grid;
                        column-gap: 35px;
                        grid-template-columns: auto auto auto;">
            <div>
                <label for="inputName" class="col-form-label">Nom</label>
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
                <label for="inputAccountNumber" class="col-form-label">Account Numero</label>
                <input type="text" name="AccountNumber" class="form-control" id="inputAdresse">
            </div>
            <div>
                <label for="inputPhone" class="col-form-label">Numero de portable</label>
                <input type="tel" name="phone" class="form-control" id="inputPhone">
            </div>
            <div>
                <label for="inputAdresse" class="col-form-label">Email</label>
                <input type="email" name="Email" class="form-control" id="inputAdresse">
            </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--END Add client Modal-->


<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 858px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('Clients.update') }}" method="post"> 
        @csrf
        @method('PUT')
        <input type='hidden' name="id" id='modal-input-id' class='modal_hiddenid'>
        <div style="    display: grid;
                        column-gap: 35px;
                        grid-template-columns: auto auto auto;">
            <div>
                <label for="inputName" class="col-form-label">Nom</label>
                <input type="text" name="Name" id="modal-input-Name" class="form-control" >
            </div>
            <div>
                <label for="inputAdresse" class="col-form-label">Adresse</label>
                <input type="text" name="Adresse" id="modal-input-Adresse" class="form-control" id="inputAdresse">
</div>
            <div>
                <label for="inputAccountType" class="col-form-label">Account type</label>
                <input type="text" name="AccountType" id="modal-input-AccountType" class="form-control" id="inputAdresse">
            </div>
            <div>
                <label for="inputAccountNumber" class="col-form-label">Account Number</label>
                <input type="text" name="AccountNumber" id="modal-input-AccountNumber" class="form-control" id="inputAdresse">
            </div>
            <div>
                <label for="inputPhone" class="col-form-label">Numero Portable</label>
                <input type="tel" name="phone" id="modal-input-phone" class="form-control" id="inputPhone">
            </div>
            <div>
                <label for="inputAdresse" class="col-form-label">Email</label>
                <input type="email" name="Email" id="modal-input-Email" class="form-control" id="inputAdresse">
            </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
      </form>
    </div>
  </div>
</div>



{!! $clients->links() !!}

@endsection

@push('script')


@endpush 