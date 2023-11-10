<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlayList</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/playlist.css')}}">
</head>
<body>

    <header>
        <div class="menu_side">
        <h1>Playlist</h1>
        <div class="playlist">
            <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
            <h4><span></span><i class="bi bi-music-note-beamed"></i>Last Listening</h4>
            <h4><span></span><i class="bi bi-music-note-beamed"></i> recommended</h4>
        </div>
        <div class="menu_song">
            <li class="songItem">
                <span>01</span>
                <img src="{{asset('img/alan-walker-ordenador.jpg')}}" alt="">
                <h5>
                  on my way
                    <div class="subtitle">alan walker</div>
                </h5>
                    <i class="bi playList bi-play-circle-fill" id="1"></i>
            </li>
            <li class="songItem">
                <span>02</span>
                <img src="{{asset('img/alan-walker-ordenador.jpg')}}" alt="">
                <h5>
                  on my way
                    <div class="subtitle">alan walker</div>
                </h5>
                    <i class="bi playList bi-play-circle-fill" id="1"></i>
            </li>
            <li class="songItem">
                <span>03</span>
                <img src="{{asset('img/alan-walker-ordenador.jpg')}}" alt="">
                <h5>
                  on my way
                    <div class="subtitle">alan walker</div>
                </h5>
                    <i class="bi playList bi-play-circle-fill" id="1"></i>
            </li>
            <li class="songItem">
                <span>04</span>
                <img src="{{asset('img/alan-walker-ordenador.jpg')}}" alt="">
                <h5>
                  on my way
                    <div class="subtitle">alan walker</div>
                </h5>
                    <i class="bi playList bi-play-circle-fill" id="1"></i>
            </li>
            <li class="songItem">
                <span>05</span>
                <img src="{{asset('img/alan-walker-ordenador.jpg')}}" alt="">
                <h5>
                  on my way
                    <div class="subtitle">alan walker</div>
                </h5>
                <i class="bi playList bi-play-circle-fill" id="1"></i>
            </li>
            <li class="songItem">
                <span>06</span>
                <img src="{{asset('img/alan-walker-ordenador.jpg')}}" alt="">
                <h5>
                  on my way
                    <div class="subtitle">alan walker</div>
                </h5>
                    <i class="bi playList bi-play-circle-fill" id="1"></i>
            </li>

        </div>
    </div>
        <div class="song_side"></div>

        <div class="master_play">
            <div class="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="{{asset('img/alan-walker-ordenador.jpg')}}" alt="">
            <h5>on my way <br>
                  <div class="subtitle">alan walker</div>
              </h5>
              <div class="icon">
                <i class="bi bi-skip-start-fill"></i>
                <i class="bi bi-play-fill"></i>
                <i class="bi bi-skip-end-fill"></i>
              </div>
              <span id="currentStart">0:00</span>
              <div class="bar">
                {{-- <input type="range" id="seek" min="0" value="0" max="100"> --}}
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
              </div>
              <span id="currentEnd">0:00</span>
        </div>
    </header>
    <script src="{{ asset('js/playlist.js') }}"></script>

</body>
</html>
