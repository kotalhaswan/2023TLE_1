<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Live</title>
    <script type="text/javascript" src={{asset('/js/app.js')}}""></script>


</head>
<body>

<main>
    <div class="live">
        <p id="placeholder">here comes live</p>
        <img id="movableImage" src="{{asset(('img/museumone.jpg'))}}" alt="Movable Image">
    </div>

    <img class="listeners-group" src="{{asset('img/employee-listening.jpeg')}}" alt="listeners">
    <img class="microphone" src="{{asset('img/microphone-on.png')}}" alt="microphone">

    <div class="cards">
        <div class="card" id="start">
            <p>Beginpunt</p>
        </div>

        <div class="card" id="middle">
            <p>Middelpunt</p>
        </div>

        <div class="card" id="end">
            <p>Eindpunt</p>
        </div>
    </div>

    <div class="arrows">
        <div class="arrow" id="up">
            <img class="arrow-image" src="{{asset(('img/arrow_up.png'))}}" alt="up arrow">
        </div>
        <div class="arrow" id="left">
            <img class="arrow-image" src="{{asset(('img/arrow_left.png'))}}" alt="left arrow">
        </div>
        <div class="arrow" id="right">
            <img class="arrow-image" src="{{asset(('img/arrow_right.png'))}}" alt="right arrow">
        </div>
        <div class="arrow" id="down">
            <img class="arrow-image" src="{{asset(('img/arrow_down.png'))}}" alt="down arrow">
        </div>

    </div>

</main>


</body>
</html>
