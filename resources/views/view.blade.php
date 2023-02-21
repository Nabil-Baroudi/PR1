<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b553558f01.js" crossorigin="anonymous"></script>

</head>


<style type="text/css">
    body {
        background: #343a40 !important;
    }

    /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */

    a:hover {
        opacity: 0.5;
        transition: .5s ease;
    }
</style>

<body>
    <div class="row m">
        <nav class="navbar navbar-expand-md navbar-light bg-grey">
            <form method="POST" action="{{ route('logout') }}" class="navbar-nav ms-auto">
                @csrf
                <a href="{{ route('logout') }}" class="btn" style="background-color: #0aa2c0"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="mr-2 fas fa-sign-out-alt"></i>
                    {{ __('Log Out') }}
                </a>
            </form>
        </nav>
        <form class="row" action="/get" method="get">
            <div class="col">
                <a href="/index" style="background-color: #0aa2c0;" class="btn">back to Home</a>
            </div>
            <div class="col">
                <input class="form-control" style="background-color: #dee2e6" type="text" name="expression"
                    id="expression" placeholder="Search for movies,tv shows, etc.." required>
            </div>
            <div class="col">
                <button type="submit" style="background-color: #0aa2c0;"
                    class="btn fa-solid fa-magnifying-glass"></button>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row">
            @for ($num = 0; $num <= 3; $num++)
                <div class="col">
                    <p style="color: #adb5bd">{{ $data['results'][$num]['title'] }}</p>
                    <a href="{{ route('playTrailer', $data['results'][$num]['id']) }}"><img
                            src={{ $data['results'][$num]['image'] }} alt="poster"
                            class="w-75 h-75 border border-dark border-3 rounded"></a>
                    <p style="color: #adb5bd">{{ $data['results'][$num]['description'] }}</p>
                </div>
            @endfor
            <div class="row">
                @for ($num = 4; $num <= 7; $num++)
                    <div class="col">
                        <p style="color: #adb5bd">{{ $data['results'][$num]['title'] }}</p>
                        <a href="{{ route('playTrailer', $data['results'][$num]['id']) }}"><img
                                src={{ $data['results'][$num]['image'] }} alt="poster"
                                class="w-75 h-75 border border-dark border-3 rounded"></a>
                        <p style="color: #adb5bd">{{ $data['results'][$num]['description'] }}</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>

</body>

</html>
