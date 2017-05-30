<style>

@import url('https://fonts.googleapis.com/css?family=Poiret+One');


html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
  font-family: 'Poiret One', cursive !important;
  background-color: black;
}

a {
    color: white !important;
    text-decoration: none !important;
}

.navbar-default {
  background-color: rgba(0, 0, 0, 0.7) !important;
  border-color: transparent !important;
  margin-bottom: 0px !important;
}

.headline{
   position: fixed;
   z-index: 3;
   color: #fff;
   top: 40%;
   background-color: rgba(0, 0, 0, 0.8);
   padding-left: 3%;
   padding-right: 3%;
	 left: 75%;
}



.headline h1{
  font-size: 4.5rem;
	animation-duration: 1s;
}



.galeria {
position: relative;
width: 100%; /* Ancho a ocupar por la galería sobre el total disponible */
overflow: hidden;
}
.galeria:before {
content: "";
position: absolute;
width: 100%;
height: 100%;
opacity: .1;
}
.imagen {
position: relative;
width: 15%; /* Ancho de la miniatura sobre el ancho total de la galería */
padding-bottom: 15%; /* Idéntico al anterior para miniaturas cuadradas */
background-position: 50% 50%;
-moz-background-size: cover;-webkit-background-size: cover;background-size: cover;
cursor: pointer;
}
.imagen:before {
content: "";
position: absolute;
top: -700%; /* ((Nºimágenes*2)-1)*100*/
left: 100%;
width: 566%; /* (10000/ancho_imagen)-100 */
height: 400%; /* Nºimagenes*100 */
background-image: inherit;
-moz-background-size: cover;-webkit-background-size: cover;background-size: cover;
-moz-transition: all .8s ;-webkit-transition: all .8s ;transition: all .8s ;
}

html {
  width: 100%;
  height: 100%;
  background: -webkit-gradient(radial, 50%, 0, 50%, 100, color-stop(0%, #c26649), color-stop(100%, #6b220b));
  background: -webkit-radial-gradient(center, ellipse cover, #c26649 0%, #6b220b 100%);
  background: -moz-radial-gradient(center, ellipse cover, #c26649 0%, #6b220b 100%);
  background: radial-gradient(center, ellipse cover, #c26649 0%, #6b220b 100%);
}

    .arrow img {
      border-radius: 3px;
      animation: arrow 2s both infinite;
      position: fixed;
      font-size: 30px;
      bottom: 10%;
      right: 5%;
      margin: 0 auto;
      display: block;
      opacity: 0.5;
      pointer-events: auto !important;

    }

    @keyframes arrow {
        0%, 20%, 50%, 80%, 100% {
          transform: translateY(0) rotate(180deg);
        }
        40% {
          transform: translateY(-5px) rotate(180deg);
        }
        60% {
          transform: translateY(-5px) rotate(180deg);
        }
    }


</style>

@extends('layouts.app')

@section('content')

<div id="wrapper">
<header>
  <div class="headline">
    <h1 class="animated fadeInRight">Mes Articles</h1>
  <div class="arrow"><a class="js-scrollTo" href="#wrapper"><img src="http://marcelklacan.com/images/icon.png" alt="" /></a></div>

  </div>
  </header>



	<div class="galeria">
	 <div class="imagen" style="background-image: url(http://lafilledecorinthe.com/wordpress/wp-content/uploads/2015/05/Varini.jpg)"></div>
	 <div class="imagen" style="background-image: url(http://lafilledecorinthe.com/wordpress/wp-content/uploads/2015/05/Varini.jpg)"></div>
	 <div class="imagen" style="background-image: url(http://lafilledecorinthe.com/wordpress/wp-content/uploads/2015/05/Varini.jpg)"></div>
	 <div class="imagen" style="background-image: url(http://lafilledecorinthe.com/wordpress/wp-content/uploads/2015/05/Varini.jpg)"></div>
	</div>








<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
// document.addEventListener("DOMContentLoaded", function(event) {

'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', function () {
    return gulp.src('./flexbin.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'));
});

// Watch SASS file changes
gulp.task('watch', function () {
    gulp.watch('./flexbin.scss', ['default']);
});


// });

$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
	});
</script>

@endsection
