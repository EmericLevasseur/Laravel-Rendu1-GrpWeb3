<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            body {
                color: white;
                font-family: 'Poiret One', cursive;
                font-weight: 100;
                max-width: 100%;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url('http://orig10.deviantart.net/d662/f/2013/221/0/3/gif___paris_seine_timelapse_by_turst67-d6h6ono.gif');
            }


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                animation: show 1.5s ease-in;
                transition: all 1s;
            }

            @keyframes show{
  from{
    opacity: 0;
                }
  to{
    opacity: 1;
                }
}

.m-b-md:hover, .m-b-md:focus{
  color: #FFD700 ;
  transform: scale(1.07);
}

            .phrase {
              font-size: 30px;
              font-family: 'Dancing Script', cursive;
            }

            .navbar {
              background-color: black;
            }
            .navbar-brand {
              color: white;
            }
            a {
    text-decoration: none;
    color: #ffffff;
}

a:hover {
text-decoration: none;
color: white;
}

.navbar-nav>li>a:hover {
  color: black;
}


.glyphicon-menu-right {
  padding-top: 10px;
}



.arrow {
  position: fixed;
  font-size: 30px;
  border-radius: 3px;
  background-color: rgba(0, 0, 0, 0.7);
  bottom: 10%;
  right: 5%;
  margin: 0 auto;
  display: block;
  padding-left: 15px;
  transition: all 1s;
}

.arrow img {
  bottom: 10%;
  right: 5%;
  border-radius: 3px;
  animation: arrow 2s both infinite;

}

.arrow:hover {
    background-color: rgba(0, 0, 0, 1);
    transform: scale(1.1);
}



@keyframes arrow {
    0%, 20%, 50%, 80%, 100% {
      transform: translateX(0) rotate(-90deg);
    }
    40% {
      transform: translateX(70px) rotate(-90deg);
    }
    60% {
      transform: translateX(15px) rotate(-90deg);
    }
}
        </style>
    </head>
    <body>

      <nav class="navbar navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Paris Photography</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            @if (Route::has('login'))
            <ul class="nav navbar-nav navbar-right">
              @if (Auth::check())
              <li><a href="{{ url('/home') }}">Accueil</a></li>
              <li><a href="{{ url('/article') }}">Articles</a></li>
              @else
              <li><a href="{{ url('/login') }}">Connexion</a></li>
              <li><a href="{{ url('/register') }}">Inscription</a></li>
              @endif
            </ul>
            @endif
          </div><!--/.nav-collapse -->
        </div>
      </nav>

        <div class="flex-center position-ref full-height">


            <div class="content">
              <a href="home">
                <div class="title m-b-md">
                    The Parisian</br>
                  <div class="phrase">Discovering Paris in a new light</div>
                  </div>
                <div class="arrow">Découvrir<img src="http://marcelklacan.com/images/icon.png" alt="" /></div>

            </div>
        </div>
    </body>
</html>
