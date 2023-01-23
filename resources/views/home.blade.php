<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 9</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="m-2">
        <div class="container">
                        <h1 class="display-5  fw-bold mb-5 mt-3 " >
                            Welcome to Movies Laravel 9
                        </h1>

                        <div class="row">
                            @foreach ($movies as $movie )
                                <div class="col-3 mb-5">
                                    <div class="card bg-color" style="width: 18rem; height: 12rem;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title ">{{$movie->title}} </h5>
                                            <h6 class="card-subtitle mb-2 text-white">'{{$movie->original_title}}'</h6>
                                            <p class="card-text">{{$movie->nationality}} {{$movie->date}}</p>
                                            <a href="#" class="card-link  text-decoration-none">{{$movie->vote}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>