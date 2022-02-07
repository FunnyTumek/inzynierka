@extends('layouts.app_zalogowany')

@section('title','Produkty żywnościowe')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h2>Produkty żywnościowe</h2>
        </div>
        <div class="col-md-4">
            <form action="/szukaj2" method="get">
                <div class="input-group">
                    <input type="search" name="szukaj2" class="form-control">
                    <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Szukaj</button>
                        </span>
                </div>
            </form>
        </div>
    </div>
    <a class="btn btn-success text-center mt-2 mb-2" href="{{ route('produktyzywnosciowe.create') }}"> Dodaj produkt żywnościowy</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nazwa</th>
            <th>Opis</th>
            <th>Kalorie</th>
            <th>Bialko</th>
            <th>Weglowodany</th>
            <th width="280px">Opcje</th>
        </tr>
        @foreach ($produktyzywnosciowe as $produkt)
            <tr>
                <td>{{ $produkt->Nazwa }}</td>
                <td>{{ $produkt->Opis }}</td>
                <td>{{ $produkt->Kalorie }}</td>
                <td>{{ $produkt->Bialko }}</td>
                <td>{{ $produkt->Weglowodany }}</td>
                <td>
                    <form action="{{ route('cwiczenia.destroy',$produkt->idProduktyZywnosciowe ) }}" method="POST">

                        <a class="btn btn-info ml-2" href="{{ route('cwiczenia.show',$produkt->idProduktyZywnosciowe ) }}">Pokaż</a>

                        <a class="btn btn-primary ml-2" href="{{ route('cwiczenia.edit',$produkt->idProduktyZywnosciowe ) }}">Edytuj</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger ml-2">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
