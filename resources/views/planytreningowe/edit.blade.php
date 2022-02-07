@extends('layouts.app_zalogowany')

@section('title','Edytuj Plan treningowy')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edytuj Plan treningowy {{ $planytreningowe->Nazwa }}</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Wystąpiły problemy z wprowadzeniem danych.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('planytreningowe.update',$planytreningowe->idPlanyTreningowe ) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwa:</strong>
                    <input type="text" name="Nazwa" value="{{ $planytreningowe->Nazwa }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Opis:</strong>
                    <textarea class="form-control" style="height:150px" name="Opis" placeholder="Opis">{{ $planytreningowe->Opis }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Przewidywany czas wykonywania:</strong>
                    <input type="text" name="PrzewidywanyCzasWykonywania" value="{{ $planytreningowe->PrzewidywanyCzasWykonywania }}" class="form-control" placeholder="Przewidywany Czas Wykonywania">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Liczba kalorii do spalenia:</strong>
                    <input type="text" name="LiczbaKaloriiDoSpalenia" value="{{ $planytreningowe->LiczbaKaloriiDoSpalenia }}" class="form-control" placeholder="Liczba Kalorii Do Spalenia">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Dodaj</button>
                    <a class="btn btn-danger" href="{{ route('planytreningowe.index') }}"> Powrót</a>
            </div>
        </div>

    </form>
@endsection
