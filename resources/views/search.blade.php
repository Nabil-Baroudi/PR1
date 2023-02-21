<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/b553558f01.js" crossorigin="anonymous"></script>

</head>

<style type="text/css">
    body {
        background: #343a40 !important;
    }

    /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
    p {
        color: #adb5bd;
    }

    a:hover {
        opacity: 0.5;
        transition: .5s ease;
    }
</style>

<body>
    <div class="container">
        <div class="row">
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
                    <input class="form-control" style="background-color: #dee2e6" type="text" name="expression"
                        id="expression" placeholder="Search for movies,tv shows, etc.." required>
                </div>
                <div class="col">
                    <input class="btn" style="background-color: #0aa2c0" type="submit" value="Search">
                </div>
            </form>
        </div>

        <div class="row">
            @for ($num = 0; $num <= 3; $num++)
                <div class="col">
                    <p>{{ $data['items'][$num]['title'] }}</p>
                    <a href="{{ route('playTrailer', $data['items'][$num]['id']) }}"><img
                            src={{ $data['items'][$num]['image'] }} alt="poster"
                            class="w-75 h-75 border border-dark border-3 rounded"></a>
                    <p>{{ $data['items'][$num]['crew'] }}</p>
                </div>
            @endfor
            <div class="row">
                @for ($num = 4; $num <= 7; $num++)
                    <div class="col">
                        <p>{{ $data['items'][$num]['title'] }}</p>
                        <a href="{{ route('playTrailer', $data['items'][$num]['id']) }}"><img
                                src={{ $data['items'][$num]['image'] }} alt="poster"
                                class="w-75 h-75 border border-dark border-3 rounded"></a>
                        <p>{{ $data['items'][$num]['crew'] }}</p>
                    </div>
                @endfor
                <div class="row">
                    @for ($num = 8; $num <= 11; $num++)
                        <div class="col">
                            <p>{{ $data['items'][$num]['title'] }}</p>
                            <a href="{{ route('playTrailer', $data['items'][$num]['id']) }}"><img
                                    src={{ $data['items'][$num]['image'] }} alt="poster"
                                    class="w-75 h-75 border border-dark border-3 rounded"></a>
                            <p>{{ $data['items'][$num]['crew'] }}</p>
                        </div>
                    @endfor
                    <div class="row">
                        @for ($num = 12; $num <= 15; $num++)
                            <div class="col">
                                <p>{{ $data['items'][$num]['title'] }}</p>
                                <a href="{{ route('playTrailer', $data['items'][$num]['id']) }}"><img
                                        src={{ $data['items'][$num]['image'] }} alt="poster"
                                        class="w-75 h-75 border border-dark border-3 rounded"></a>
                                <p>{{ $data['items'][$num]['crew'] }}</p>
                            </div>
                        @endfor
                        <div class="row">
                            @for ($num = 16; $num <= 19; $num++)
                                <div class="col">
                                    <p>{{ $data['items'][$num]['title'] }}</p>
                                    <a href="{{ route('playTrailer', $data['items'][$num]['id']) }}"><img
                                            src={{ $data['items'][$num]['image'] }} alt="poster"
                                            class="w-75 h-75 border border-dark border-3 rounded"></a>
                                    <p>{{ $data['items'][$num]['crew'] }}</p>
                                </div>
                            @endfor

</body>

</html>
