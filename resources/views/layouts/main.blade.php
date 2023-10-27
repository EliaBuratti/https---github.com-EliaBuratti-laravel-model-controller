<main>
    <div class="eb_bg">
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
    </div>
</main>