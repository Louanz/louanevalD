@extends('layouts.app')
<br>
<title>@yield('title', 'Création serveur')</title>
<br>
@section('content')
<br><div>
    <h2>Création</h2>
    <form action="{{ route('serveur.store') }}" method="post"  class="btn btn-p-3 mb-2 bg-dark text-white">

        @csrf

        <div>
            <label for="ip">Adresse IP</label><br>
            <input type="number" name="ip" id="ip" required value="{{ old('ip') }}" maxlength="75">
        </div><br>

        <div>
            <label for="type">Type</label><br>
            <input type="text" name="type" id="type" required value="{{ old('type') }}" maxlength="75">
        </div><br>

        <div>
            <label for="os">OS</label><br>
            <input type="text" name="os" id="os" required value="{{ old('os') }}">
        </div><br>


        <div>
            <label for="reseau">Reseau</label>
            <select name="reseau" id="reseau">
                @foreach ($reseau as $reseaus)
                    <option value="{{ $reseaus->id }}">{{ $reseaus->libelle }}</option>
                @endforeach
            </select>
        </div><br>

        <div>
        <input type="submit" value="Valider" class="btn btn-p-3 mb-2 bg-white text-dark border">
        </div>

    </form>
</div>
@endsection
