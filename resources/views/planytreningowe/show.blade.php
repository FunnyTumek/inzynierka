@extends('layouts.app_zalogowany')

@section('title','Plan Treningowy')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $planytreningowe->Nazwa }}</h2>
            </div>

        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nazwa:</strong>
                {{ $planytreningowe->Nazwa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Opis:</strong>
                {{ $planytreningowe->Opis }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Przewidywany czas wykonywania:</strong>
                {{ $planytreningowe->PrzewidywanyCzasWykonywania }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Liczba kalorii do spalenia:</strong>
                {{ $planytreningowe->LiczbaKaloriiDoSpalenia }}
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('planytreningowe.index') }}"> Powrót</a>
    </div>
@endsection
