<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <style media="screen">
      * {
          margin: 0px;
          padding: 0px;
      }
      h2 {
          font-family: 'Oswald', sans-serif;
      }
      p {
          font-family: 'Montserrat', sans-serif;
          font-size: .8rem;
          opacity: .6;
          margin-top: 10px;
      }
      .content {
          display: flex;
          align-items: center;
          justify-content: center;
          background: rgb(242, 243, 248);
          width: 100vw;
          height: 100vh;
          overflow: hidden;
      }
      .content:after {
          content: '';
          left: 80px;
          height: 100%;
          position: absolute;
          width: 150px;
          z-index: 100;
          background: linear-gradient(90deg, rgb(242, 243, 248) 0%, rgba(242, 243, 248,0) 100%);
          pointer-events: none;
      }
      .content:before {
          content: '';
          pointer-events: none;
          right: 80px;
          height: 100%;
          position: absolute;
          width: 150px;
          z-index: 100;
          background: linear-gradient(90deg, rgba(242, 243, 248,0) 0%, rgba(242, 243, 248,1) 100%);
      }
      .btn {
          min-width: 60px;
          height: 60px;
          border-radius: 20px;
          background: #fff;
          border: 0px;
          outline: none;
          cursor: pointer;
          z-index: 200;
          margin: 10px;
          box-shadow: 0px 0px 0px 0px rgba(0,0,0,.08);
          transition: all .25s ease;
      }
      .btn:hover {
          transform: translate(0, -10px);
          box-shadow: 0px 17px 35px 0px rgba(0,0,0,.07);
      }
      .btn i {
          font-size: 1.6rem;
      }
      .con-cards {
          display: flex;
          align-items: center;
          justify-content: flex-start;
          width: 100%;
          overflow: auto;
          padding-top: 100px;
          padding-left:60px;
          padding-right: 50px;
          scroll-behavior: smooth
      }
      .con-cards::-webkit-scrollbar {
          height: 0px;
      }
      .con-cards:after {
          content: '';
          display: block;
          min-width: 20px;
          height: 100px;
          position: relative;
      }
      .card {
          width: 300px;
          min-width: 300px;
          height: auto;
          background: #fff;
          border-radius: 30px;
          position: relative;
          z-index: 10;
          margin: 25px;
          min-height: 356px;
          transition: all .25s ease;
          box-shadow: 0px 0px 0px 0px rgba(0,0,0,.08);
          cursor: pointer;
      }
      .card:hover {
          transform: translate(0, -10px);
          box-shadow: 0px 17px 35px 0px rgba(0,0,0,.07);
      }
      .card:hover .con-img {
          transform: translate(0,-15px);
      }
      .card:hover .con-img img.blur{
          opacity: .45;
          transform: translate(-10px, 26px) scale(.85);
      }
      .card h3 {
          position: absolute;
          font-family: 'Oswald', sans-serif;
          left: 0px;
          top: 0px;
          padding: 15px;
      }
      .card i.bx {
          position: absolute;
          right: 0px;
          top: 0px;
          padding: 15px;
          font-size: 1.3rem;
      }
      .card .con-text {
          padding: 20px;
      }
      .card .con-img {
          /* transform: translate(0,-90px); */
          width: calc(100% - 60px);
          margin: 0px 30px;
          margin-top: -90px;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: all .35s ease-out;
      }
      .card img {
          height: 300px;
      }
      .card img.blur {
          position: absolute;
          filter: blur(15px);
          z-index: -1;
          opacity: .35;
          transform: translate(-10px, 10px) scale(.85);
          transition: all .35s ease-out;
      }
    </style>
  </head>
  <body>

    <div id="app">

      <div class="content">
          <button id="prev" class="btn">
              <i class='bx fas fa-chevron-left'></i>
          </button>
          <div class="con-cards">


              {{-- <card-vue
              v-for="(item, index) in 10"
              v-bind:key="item.id"
              :index="index"
              >
              </card-vue> --}}


            <div class="card">
                <h3>4.0</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="img/call_of_duty.png" alt="">
                    <img class="blur" src="img/call_of_duty.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Call Of Duty Warzone
                    </h2>
                    <p>
                        <!-- text... -->
                        Warzone features two primary game modes: Battle Royale and Plunder.The Battle Royale mode is similar to other titles in the genre where players compete in a continuously shrinking map to be the last player remaining.
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>4.6</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="img/clash-royale.png" alt="">
                    <img class="blur" src="img/clash-royale.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Clash Royale
                    </h2>
                    <p>
                        <!-- text... -->
                        Dare to step on the sand! From the creators of Clash of Clans, comes Clash Royale, a real-time multiplayer game starring your favorite Clash.
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>4.1</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="img/Assassin-creed.png" alt="">
                    <img class="blur" src="img/Assassin-creed.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Assassins Creed
                    </h2>
                    <p>
                        It is a series of video games, comics, books, and shorts of historical fiction. Video games are action-adventure, stealth and open world.
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>4.8</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="img/fortnite.png" alt="">
                    <img class="blur" src="img/fortnite.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Fortnite
                    </h2>
                    <p>
                        Fortnite is a video game of the year 2017 developed by the company Epic Games, released as different software packages that present different game modes
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>3.9</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="img/angry-birds.png" alt="">
                    <img class="blur" src="img/angry-birds.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Angry Birds
                    </h2>
                    <p>
                        Angry Birds is a casual video game from 2009 developed by Rovio Entertainment
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>4.2</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="img/clash-of-clans.png" alt="">
                    <img class="blur" src="img/clash-of-clans.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Clash of Clans
                    </h2>
                    <p>
                        also known as CoC is an online strategy and village building video game, for mobile devices with IOS and Android platforms.
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>4.9</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="img/dark-souls.png" alt="">
                    <img class="blur" src="img/dark-souls.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Dark Souls
                    </h2>
                    <p>
                        The Souls series is a series of video games belonging to the role-playing and action genre, created and developed by the company From Software.
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>3.6</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="img/farcry-4.png" alt="">
                    <img class="blur" src="img/farcry-4.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Far Cry 4
                    </h2>
                    <p>
                        Is an open world first person action video game developed by Ubisoft Montreal in conjunction with Ubisoft Red Storm,
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>3.8</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="img/final-fantasy.png" alt="">
                    <img class="blur" src="img/final-fantasy.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Final Fantasy
                    </h2>
                    <p>
                        Final Fantasy XV is a video game of the ARPG genre developed by Square Enix, for PlayStation 4, Xbox One and Microsoft Windows.
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>4.7</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="img/gears-of-war.png" alt="">
                    <img class="blur" src="img/gears-of-war.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Gears of War
                    </h2>
                    <p>
                        <!-- card elements... -->
                        Gears of War 4 or Gears 4 is a third-person shooter and action video game developed by The Coalition and distributed by Microsoft released on October 11, 2016 for Xbox One
                    </p>
                </div>
            </div>
          </div>
          <button id="next" class="btn">
              <i class='bx fas fa-chevron-right' ></i>
          </button>
      </div>

    </div>

    <script type="text/javascript">

    </script>

    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
