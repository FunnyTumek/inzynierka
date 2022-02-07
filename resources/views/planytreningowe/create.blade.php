@extends('layouts.app_zalogowany')

@section('title','Dodaj plan treningowy')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dodaj nowy plan treningowy</h2>
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

    <form action="{{ route('planytreningowe.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwa:</strong>
                    <input type="text" name="Nazwa" class="form-control" placeholder="Nazwa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Opis:</strong>
                    <textarea class="form-control" style="height:150px" name="Opis" placeholder="Opis"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Przewidywany czas wykonywania:</strong>
                    <input type="text" name="PrzewidywanyCzasWykonywania" class="form-control" placeholder="PrzewidywanyCzasWykonywania">
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Liczba kalorii do spalenia:</strong>
                        <input type="text" name="LiczbaKaloriiDoSpalenia" class="form-control" placeholder="LiczbaKaloriiDoSpalenia">
                    </div>
                </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Dodaj</button>
                <a class="btn btn-danger" href="{{ route('planytreningowe.index') }}"> Cofnij</a>
            </div>
        </div>

    </form>

@endsection
