@extends('layouts.app_zalogowany')

@section('title','Ćwiczenie')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $rodzajecwiczen->Nazwa }}</h2>
            </div>

        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Opis:</strong>
                {{ $rodzajecwiczen->Opis }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zdjecie:</strong>
                {{ $rodzajecwiczen->Zdjecie }}
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('cwiczenia.index') }}"> Powrót</a>
    </div>
@endsection
