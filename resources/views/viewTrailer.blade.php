<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trailer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b553558f01.js" crossorigin="anonymous"></script>


</head>

<style>
    body {
        /*background: #343a40 !important;*/
        background: rgb(13, 13, 13);
    }

    .player {
        position: absolute;
        margin: auto;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .back {
        position: fixed;
        color: #adb5bd;
        margin: auto;
        top: 60%;
        transform: translate(-50%, -50%);
        font-size: 5em;
        text-decoration: none;
    }
</style>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-grey">
            <form method="POST" action="{{ route('logout') }}" class="navbar-nav ms-auto">
                @csrf
                <a href="{{ route('logout') }}" class="btn" style="background-color: #0aa2c0; color:black"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="mr-2 fas fa-sign-out-alt"></i>
                    {{ __('Log Out') }}
                </a>
            </form>
        </nav>
        <center>
            <div class="row">
                <iframe width="760" height="515" src="https://www.youtube.com/embed/{{ $data['videoId'] }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="player">
                </iframe>
                <a href="/index" class="back">&#9204;</a>

            </div>
        </center>
    </div>
</body>

</html>
