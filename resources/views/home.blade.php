<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Laravel Primi Passi</title>
</head>

<body class="bg-secondary text-dark">
    
    <nav data-bs-theme="dark" class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about-us')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('faq')}}">F.A.Q.</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        <header class="text-center pb-5">
            <h1 class="py-3">
                Home
            </h1>
            <h2>
                {{$welcome}}
            </h2>
        </header>
        <main>
            <h3 class="mb-4">
                Cosa puoi fare con la nostra Web App:
            </h3>
            <ul data-bs-theme="dark" class="list-group col-12 col-md-6">
                @foreach($features as $currentFeature)
                    <li class="list-group-item">
                        <h4>
                            {{$currentFeature}}
                        </h4>
                    </li>
                @endforeach
            </ul>
        </main>
    </div>



    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>