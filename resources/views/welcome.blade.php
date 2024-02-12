<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main class="bg-dark">
        <div class="jumbo">

        </div>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-6 col-md-4 col-lg-2">
                        
                    </div>
                @endforeach
            </div>

        </div>
    </main>

</body>

</html>