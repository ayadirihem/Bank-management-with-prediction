@extends('layouts.master')

@section('title')
    Dashboard 
@endsection

@section('PageName')
    Clients 
@endsection

@section('AppName')
    Application name
@endsection

@section('content')

<div class="modal-dialog">
    <div class="modal-content" style="width: 858px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('Clients.update', $client) }}" method="post"> 
        @csrf
              @method('PATCH')
        @foreach($client as $item)
        <div style="    display: grid;
                        column-gap: 35px;
                        grid-template-columns: auto auto auto;">
            <div>
                <label for="inputName" class="col-form-label">Name</label>
                <input type="text" name="Name" class="form-control" id="inputName" value="{{ $item->Name }}">
            </div>
            <div>
                <label for="inputAdresse" class="col-form-label">Adresse</label>
                <input type="text" name="Adresse" class="form-control" id="inputAdresse" value="{{ $item->Adresse }}">
</div>
            <div>
                <label for="inputAccountType" class="col-form-label">Account type</label>
                <input type="text" name="AccountType" class="form-control" id="inputAdresse" value="{{ $item->AccountType }}">
            </div>
            <div>
                <label for="inputAccountNumber" class="col-form-label">Account Number</label>
                <input type="text" name="AccountNumber" class="form-control" id="inputAdresse" value="{{ $item->AccountNumber }}">
            </div>
            <div>
                <label for="inputPhone" class="col-form-label">Phone number</label>
                <input type="tel" name="phone" class="form-control" id="inputPhone" value="{{ $item->phone }}">
            </div>
            <div>
                <label for="inputAdresse" class="col-form-label">Email</label>
                <input type="email" name="Email" class="form-control" id="inputAdresse" value="{{ $item->Email }}">
            </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
      @endforeach
    </div>
  </div>

@endsection

@section('scripts')

@endsection