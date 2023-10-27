<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/bootstrap.js'])
</head>

<body>

    <header>

        <nav class="navbar sticky-top navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Movies</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ms-auto">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item ms-auto">
                            <a class="nav-link active" aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item ms-auto">
                            <a class="nav-link active" aria-current="page" href="#">Contacts</a>
                        </li>
                        <li class="nav-item ms-auto">
                            <a class="nav-link active" aria-current="page" href="#">Help</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main>
        <div class="container my-5">
            <div class="row gap-4 justify-content-center">
                @foreach($movies as $movie)
                <div class="card p-0" style="width: 18rem;">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="random picsum image">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
                        <h5 class="card-title">Titolo originale: {{ $movie->original_title }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
                        <li class="list-group-item">Data Pubblicazione: {{ $movie->date }}</li>
                        <li class="list-group-item">Voto: {{ $movie->vote }} / 10</li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>




</html>