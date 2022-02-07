@extends('layouts.app_zalogowany')

@section('title','Ćwiczenia')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h2>Ćwiczenia</h2>
        </div>
        <div class="col-md-4">
            <form action="/szukaj" method="get">
                <div class="input-group">
                    <input type="search" name="szukaj" class="form-control">
                    <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Szukaj</button>
                        </span>
                </div>
            </form>
        </div>
    </div>
    <a class="btn btn-success text-center mt-2 mb-2" href="{{ route('cwiczenia.create') }}"> Dodaj ćwiczenie</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nazwa</th>
            <th>Opis</th>
            <th width="280px">Opcje</th>
        </tr>
        @foreach ($rodzajecwiczen as $cwicz)
            <tr>
                <td>{{ $cwicz->Nazwa }}</td>
                <td>{{ $cwicz->Opis }}</td>
                <td>
                    <form action="{{ route('cwiczenia.destroy',$cwicz->idRodzajeCwiczen) }}" method="POST">

                        <a class="btn btn-info ml-2" href="{{ route('cwiczenia.show',$cwicz->idRodzajeCwiczen) }}">Pokaż</a>

                        <a class="btn btn-primary ml-2" href="{{ route('cwiczenia.edit',$cwicz->idRodzajeCwiczen) }}">Edytuj</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger ml-2">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
