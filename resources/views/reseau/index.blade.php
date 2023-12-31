@extends('layouts.app')

<title>@yield('title', 'Liste des reseaux')</title>

@section('content')
<br>
<br>
    <br><a href="{{ route('reseau.create') }}" class="btn btn-p-3 mb-2 bg-dark text-white">Ajouter</a><br><br>

    @foreach ($reseau as $reseaus)
    <table class="table table-striped table-bordered">
        <td style="width:50%">
            <ul><br>
                <li>libelle : {{  $reseaus->libelle }}</li>
                <li>LAN : {{  $reseaus->lan }}</li>
                <li>Disponibilité : {{  $reseaus->is_disponible }}</li>
            </ul>
        </td>
        <td>
            <form method="POST" action="{{ route('reseau.destroy', ['reseau' => $reseaus->id]) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-outline-danger btn-xs">Supprimer</button>
            </form>

            <a href="{{ route('reseau.edit', ['reseau' => $reseaus->id]) }}" class="btn btn-outline-warning btn-xs">Modifier</a><br><br>
        </td>
    </table>
    @endforeach


@endsection

