@extends('layouts.app_zalogowany')

@section('title','Plany Treningowe')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h2>Plany treningowe</h2>
        </div>
            <div class="col-md-4">
                <form action="/szukaj1" method="get">
                    <div class="input-group">
                        <input type="search" name="szukaj1" class="form-control">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Szukaj</button>
                        </span>
                    </div>
                </form>
            </div>
    </div>
        <a class="btn btn-success text-center mt-2 mb-2" href="{{ route('planytreningowe.create') }}"> Dodaj plan treningowy</a>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped">
        <tr>
            <th>Nazwa</th>
            <th>Opis</th>
            <th>Przewidywany czas wykonywania w minutach</th>
            <th>Liczba kalorii do spalenia</th>
            <th>Imie twórcy</th>

            <th width="280px">Opcje</th>
        </tr>
        @foreach ($planytreningowe as $plany)
            <tr>
                <td>{{ $plany->Nazwa }}</td>
                <td>{{ $plany->Opis }}</td>
                <td>{{ $plany->PrzewidywanyCzasWykonywania }}</td>
                <td>{{ $plany->LiczbaKaloriiDoSpalenia }}</td>
                <td>{{ $plany->trenerzy->Imie }}</td>

                <td>
                    <form action="{{ route('planytreningowe.destroy',$plany->idPlanyTreningowe ) }}" method="POST">

                        <a class="btn btn-info ml-2"
                           href="{{ route('planytreningowe.show',$plany->idPlanyTreningowe ) }}">Pokaż</a>

                        <a class="btn btn-primary ml-2"
                           href="{{ route('planytreningowe.edit',$plany->idPlanyTreningowe ) }}">Edytuj</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger ml-2">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
