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
}



.headline h1{
  font-size: 4.5rem;
  left: 3%;
	animation-duration: 1s;
}



.slide{
  height: 70%;
  position: relative;
  left: 0;
  top: 0;
  width: 100%;
  opacity: 0;
  z-index: 1;
  transition: opacity 1s;
  background-size: cover;
  background-repeat: no-repeat;
}

.showing{
  opacity: 1;
  z-index: 2;
}

.slide1{
  background-image: url("http://www.servcorpconferences.fr/wp-content/uploads/2013/01/square-evii1.jpg");
}



.flexbin {
  display: flex;
  flex-wrap: wrap;
  margin: -2.5px; }
  .flexbin:after {
    content: '';
    flex-grow: 999999999;
    min-width: 300px;
    height: 0; }
  .flexbin > * {
    position: relative;
    display: block;
    height: 300px;
    margin: 2.5px;
    flex-grow: 1; }
    .flexbin > * > img {
      height: 300px;
      object-fit: cover;
      max-width: 100%;
      min-width: 100%;
      vertical-align: bottom; }


      .flexbin > * > img:hover {
      opacity:0.6;
      z-index: 1;
      }


  .flexbin.flexbin-margin {
    margin: 2.5px; }

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
    <h1 class="animated fadeInLeft">Architecture</h1>
  <div class="arrow"><a class="js-scrollTo" href="#wrapper"><img src="http://marcelklacan.com/images/icon.png" alt="" /></a></div>

  </div>
<ul id="slides">
  <li class="slide slide1 showing"></li>
</ul>

  </header>

  <div class="flexbin flexbin-margin">
		@foreach($articles as $article)
			@if($article->categorie_id == 1)
				<a href="article/{{$article->id}}">
					@if (Storage::disk('local')->has($article->title . '-' . $user->id . '.jpg'))
						<img src="{{ route('account.image', ['filename' => $article->title . '-' . $user->id . '.jpg']) }}">
					@endif
				</a>
			@endif
		@endforeach

  </div>

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
