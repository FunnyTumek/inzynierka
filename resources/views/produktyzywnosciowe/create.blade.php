@extends('layouts.app_zalogowany')

@section('title','Dodaj produkt żywnościowy')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dodaj nowy produkt żywnościowy</h2>
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

    <form action="{{ route('produktyzywnosciowe.store') }}" method="POST">
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
                    <strong>Kalorie:</strong>
                    <input type="number" name="Kalorie" class="form-control" placeholder="Kalorie">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bialko:</strong>
                    <input type="number" name="Bialko" class="form-control" placeholder="Bialko">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Weglowodany:</strong>
                    <input type="number" name="Weglowodany" class="form-control" placeholder="Weglowodany">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Dodaj</button>
                    <a class="btn btn-danger" href="{{ route('produktyzywnosciowe.index') }}"> Cofnij</a>
            </div>
        </div>

    </form>

@endsection
