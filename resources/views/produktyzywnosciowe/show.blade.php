@extends('layouts.app_zalogowany')

@section('title','Produkty żywnościowe')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $produktyzywnosciowe->Nazwa }}</h2>
            </div>

        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Opis:</strong>
                {{ $produktyzywnosciowe->Opis }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kalorie:</strong>
                {{ $produktyzywnosciowe->Kalorie }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bialko:</strong>
                {{ $produktyzywnosciowe->Bialko }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Weglowodany:</strong>
                {{ $produktyzywnosciowe->Weglowodany }}
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('produktyzywnosciowe.index') }}"> Powrót</a>
    </div>
@endsection
