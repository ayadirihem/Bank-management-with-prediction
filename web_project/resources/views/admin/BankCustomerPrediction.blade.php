@extends('layouts.master')

@section('title')
    Dashboard 
@endsection

@section('PageName')
    Bank Customer Churn Prediction
@endsection

@section('AppName')
    Bank Management
@endsection

@section('content')
<div>

<div class="form-style-10">
<h1>Predicting Customer Churn<span>Chaque banque veut retenir ses clients pour soutenir ses activités</span></h1>
@if(!empty($successMsg))
<div class="alert alert-primary" role="alert">
  <h4 class="alert-heading" style="color:white">{{ $successMsg }}</h4>
  
</div>
@endif
<form action="{{ route('BankCustomerPrediction.store') }}" method="post">
@csrf
    <div class="section"><span>1</span>Information Générale</div>
    <div class="inner-wrap">
        <label>Nom et Prénom <input type="text" name="name" /></label>
        <label>pays <input type="text" name="country" /></label>
        <label>age <input type="number" name="age" /></label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="gender" type="checkbox" id="inlineCheckbox1" value="0">
            <label class="form-check-label" for="inlineCheckbox1">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="gender" type="checkbox" id="inlineCheckbox2" value="1">
            <label class="form-check-label" for="inlineCheckbox2">Female</label>
        </div>
    </div>

    <div class="section"><span>2</span>informations du compte</div>
    <div class="inner-wrap">
        <label>Ancienneté (depuis combien d’années il a un compte bancaire)<input type="number" name="tenure" /></label>
        <label>credit score <input type="number" name="credit_score" /></label>
        <label>Balance <input type="text" name="balance" /></label>
        <label>Salaire estimatif <input type="text" name="estimated_salary" /></label>
        <label>Numéro de produit(Numéro de produit de la banque) <input type="number" name="products_number" /></label>
        <label>Carte de crédit (le client a-t-il une carte de crédit?)
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="credit_card" type="checkbox" id="inlineCheckbox3" value="1">
            <label class="form-check-label" name="credit_card" for="inlineCheckbox3">Oui</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="0">
            <label class="form-check-label" for="inlineCheckbox4">Non</label>
        </div>
        </label>
        <label>Membre actif (est-il membre actif de la banque?)
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="active_member" type="checkbox" id="inlineCheckbox5" value="1">
            <label class="form-check-label" for="inlineCheckbox5">Oui</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="active_member" type="checkbox" id="inlineCheckbox6" value="0">
            <label class="form-check-label" for="inlineCheckbox6">Non</label>
        </div>
        </label>
        
    </div>

    <div class="button-section">
    <button style="float:right;" type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
    </div>
</form>
</div>
</div>

@endsection

@push('script')


@endpush 