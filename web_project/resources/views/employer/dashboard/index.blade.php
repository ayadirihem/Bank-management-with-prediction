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
            <!-- ***********************************************-->
</div>
<div class="row mt-4">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold">UTILISATEURS ACTIFS</p>
                    <h1 class="font-weight-bolder" style="    padding-left: 142px;
    padding-top: 10px;">{{ $count_actived_user }}</h1>
                    <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold"></span>
                            </div>
                          </div>
                          <div class="progress" style="    height: 12px;">
                            <div class="progress-bar bg-gradient-info w-60" style="height: 15px" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>

                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class="bg-gradient-primary border-radius-lg h-100">
                    <img src="../assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <img class="w-100 position-relative z-index-2 pt-4" src="../assets/img/illustrations/rocket-white.png" alt="rocket">
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold">UTILISATEURS DÉSACTIVÉS</p>
                    <h1 class="font-weight-bolder" style="    padding-left: 142px;
    padding-top: 10px;">{{  $count_desactived_user }}</h1>
                    <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold"></span>
                            </div>
                          </div>
                          <div class="progress" style="    height: 12px;">
                            <div class="progress-bar bg-gradient-info w-60" style="height: 15px" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>

                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class="bg-gradient-primary border-radius-lg h-100">
                    <img src="../assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <img style="width: 73%;" class=" position-relative z-index-2 pt-4" src="../assets/img/illustrations/network.webp" alt="rocket">
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-5" style="margin-top: 44px;
    width: -webkit-fill-available;">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/ivancik.jpg');">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">TOTAL UTILISATEURS</h5>
                <h3 class="text-white">{{$count_actived_user + $count_desactived_user }}</h3>
                <div class="progress w-75">
               <div class="progress-bar bg-dark w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--END Add Emplyer Modal-->



<script>

</script>
@endsection

@push('script')

@endpush 