<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categorie de pieces @if (Auth::user()->unreadNotifications
                        ->where('type' , 'App\Notifications\CategoryNotification')->count()> 0 )
                        <span class="badge badge-warning"> {{Auth::user()->unreadNotifications
                            ->where('type' , 'App\Notifications\CategoryNotification')->count()}}</span>


                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Marque de véhicule @if (Auth::user()->unreadNotifications
                        ->where('type' , 'App\Notifications\MarqueNotification')->count()> 0 )
                        <span class="badge badge-warning">{{Auth::user()->unreadNotifications
                            ->where('type' , 'App\Notifications\MarqueNotification')->count()}}</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Modele de véhicule @if (Auth::user()->unreadNotifications
                        ->where('type' , 'App\Notifications\ModeleNotification')->count()> 0 )
                        <span class="badge badge-warning ">{{Auth::user()->unreadNotifications
                            ->where('type' , 'App\Notifications\ModeleNotification')->count()}}</span>


                        @endif
                    </a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="card col-8 ml-5">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="marque">La marque</label>
                    <input type="text" name="marque" id="marque" class="form-control" placeholder=""
                        aria-describedby="Marque de véhicule">
                    <small id="Marque de véhicule" class="text-muted">Marque de la véhicule</small>
                </div>
                <div class="form-group">
                    <label for="modeles">Les modeles</label>
                    <input type="text" name="modeles" id="modeles" class="form-control" placeholder=""
                        aria-describedby="les modeles compatibles avec cette piece">
                    <small id="les modeles compatibles avec cette piece" class="text-muted">les modeles
                        compatibles</small>
                </div>
                <div class="form-group">
                    <label for="categorie">Categorie</label>
                    <input type="text" name="categorie" id="categorie" class="form-control"
                        placeholder="Categorie de la piece" aria-describedby="Category">
                    <small id="Category" class="text-muted">Categorie de la piece</small>
                </div>

            </form>
        </div>
    </div>
</body>

</html>
