@extends('layouts.app')
<br>
<title>@yield('title', 'Création réseau')</title>
<br>
@section('content')

<br><div class="bg-white " style="width: 50%; border-radius:10%;">
  <h2>Création</h2>
  <form action="{{ route('reseau.store') }}" method="post"  class="btn btn-p-3 mb-2 bg-dark text-white">

    @csrf

    <div>
        <label for="libelle">Libelle :</label><br>
        <input type="text" name="libelle" id="libelle" required value="{{ old('libelle') }}" maxlength="75" placeholder='libelle'>
    </div><br>

    <div>
        <label for="lan">LAN :</label><br>
        <input type="text" name="lan" id="lan" required value="{{ old('lan') }}" maxlength="75" placeholder='LAN'>
    </div><br>


    <div>

        <label for="is_disponible">Disponibilité :</label><br>

        <input type="radio"   value="1" name="is_disponible" id="yes_disponible">
        <label for="yes_disponible">Oui</label>

        <input type="radio" value="0" name="is_disponible" id="no_disponible">
        <label for="no_disponible">Non</label>

    </div><br>



    <div>
        <input type="submit" value="Valider" class="btn btn-p-3 mb-2 bg-white text-dark border">
        </div>

  </form>
</div>
@endsection
