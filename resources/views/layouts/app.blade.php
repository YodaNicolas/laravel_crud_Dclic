<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>

<body class="font-sans antialiased">

    {{ $header }}

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark shadow" aria-label="Main navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TPC-RUD-LARAVEL</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard">Liste</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link" href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                Se deconnecter
                            </a>
                        </form>

                    </li>
                    <li class="nav-item" style="color: white;">
                        ADMINISTRATEUR : {{ Auth::user()->name.' | '.Auth::user()->email }}
                    </li>

                </ul>

            </div>
        </div>
    </nav>



    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        <!-- Page Heading -->


        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>