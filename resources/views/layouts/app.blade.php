<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <title>@yield('title', 'Eval')</title>
</head>

<body>
    <br>
    <div class="container">
        <nav>
            <div>
                <a href="{{ route('accueil.index') }}" class="btn btn-outline-dark mb-2" >{{ __('Accueil')}}</a>
                <a href="{{ route('ordinateur.index') }}" style="padding: 5px"  class="btn btn-outline-dark mb-2" >{{ __('Listes des ordinateurs')}}</a>
                <a href="{{ route('serveur.index') }}" style="padding: 5px "  class="btn btn-outline-dark mb-2">{{ __('Listes des serveurs')}}</a>
                <a href="{{ route('reseau.index') }}" style="padding: 5px " class="btn btn-outline-dark mb-2" >{{ __('Listes des réseaux')}}</a>
            </div>

            <br>
            <div>
                {{ __('Changer de language :') }} [{{ session('locale') }}] [{{ App::getLocale() }}]
                <a  class="btn btn-dark mb-2" href="{{ route('language.change', ['code_iso' => 'fr']) }}">{{ __('francais') }} </a>
                <a class="btn btn-dark mb-2" href="{{ route('language.change', ['code_iso' => 'en']) }}">{{ __('anglais') }}</a>
            </div>

            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="{{ __('Log Out') }}">


                </form>

            @endauth
        </nav>
        @yield('content')
    </div>
</body>

</html>
