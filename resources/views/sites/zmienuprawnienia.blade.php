@extends('layouts.app_zalogowany')

@section('title','Edytuj ćwiczenie')

@section('content')
    <table class="table table-bordered">
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Role</th>
            <th>Dodaj rolę</th>
        </tr>
        @foreach ($uzytkonwicy as $uzytkownik)
            <tr>
                <td>{{ $uzytkownik->Imie }}</td>
                <td>{{ $uzytkownik->Nazwisko }}</td>
                <td>
                    @foreach ($uzytkownik->roles as $rola)
                        <form action="usunrole" method="post">
                            @csrf
                            <input type="hidden" name="iduser" value="{{$uzytkownik->idUzytkownicy}}">
                            <input type="hidden" name="idrola" value="{{$rola->idRole}}">
                            {{$rola->Nazwa}}
                            <button class="btn btn-outline-danger">X</button>
                        </form>

                    @endforeach
                </td>
                <td>
                    <form action="dodajrole" method="post">
                        @csrf
                        <input type="hidden" name="iduser" value="{{$uzytkownik->idUzytkownicy}}">
                        <select name="idrola">
                            @if(!$uzytkownik->checkrole('Uzytkownik'))
                            <option value="2">Uzytkownik</option>
                            @endif
                                @if(!$uzytkownik->checkrole('Trener'))
                            <option value="3">Trener</option>
                                @endif
                                @if(!$uzytkownik->checkrole('Dietetyk'))
                            <option value="4">Dietetyk</option>
                                @endif
                                    @if(!$uzytkownik->checkrole('Pracownik silowni'))
                            <option value="5">Pracownik</option>
                                @endif
                        </select>
                        <button class="btn btn-outline-danger">Dodaj</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
