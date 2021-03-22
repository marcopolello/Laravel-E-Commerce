<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>

    <div id="app">

      <div id="layout-mountain">

        <div class="nav-laterale-cont">

          <div class="menu-lay-bg-absolute">

          </div>
          {{-- contenuto menu laterale --}}
          <div class="menu-lat-content">

            <div class="top">

              <a class="menu-lat-link" href="{{route('main')}}">Home</a>

              <button class="menu-lat-link" type="button" name="button">Settings</button>

              <a class="menu-lat-link" href="#">About</a>
              <a class="menu-lat-link" href="#">Credits</a>

            </div>

            <div class="middle">

              <img src="" class="guide">

              </img>

              <p>Guida completa degli itinerari</p>

            </div>


            <div class="bottom">

              <div class="logo">

              </div>
              <div class="logo">

              </div>
              <div class="logo">

              </div>
              <div class="logo">

              </div>

              <div class="logo">

              </div>
              <div class="logo">

              </div>

            </div>



          </div>

        </div>

        <div class="hamb-icon">

          <i class="fas fa-bars fa-4x"></i>

        </div>

        <video id="desk-mont" src="img/desk-video-mont.mp4" autoplay poster=""
        playsinline="" muted="muted" autoplay="autoplay" disableremoteplayback="" class="VideoIntroduction" style="opacity: 1; visibility: inherit;"></video>

        <div class="title-intro">
          {{-- mettere titolo centrale --}}
        </div>


      </div>

    </div>

    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
