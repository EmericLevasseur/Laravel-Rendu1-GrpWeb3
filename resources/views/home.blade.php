<style>
html, body {
  height: 100vh;
  width: 100vw;
  box-sizing: border-box;
    background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1)) !important;
    background-repeat: no-repeat !important;
    background-attachment: fixed !important;
    font-family: 'Poiret One', cursive !important;
}

h1, h2, h3, h4 {
}

#container {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 100%;
  width: 100%;
}

.slide {
  position: relative;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  height: 100%;
  overflow: hidden;
  cursor: pointer;
  -webkit-transition: all 1.5s ease-in-out;
  transition: all 1.5s ease-in-out;
}
.slide.last-viewed .btn-close:after {
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}
.slide.last-viewed .btn-close:before {
  -webkit-transition-delay: 0.1s;
          transition-delay: 0.1s;
}
.slide.last-viewed .content .city-info {
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}
.slide.last-viewed .content .emblem {
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}
.slide.last-viewed .image, .slide.active .image {
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}
.slide.active {
  cursor: default;
}
.slide.active .overlay {
  width: 25%;
  background-size: 100% 100%;
  -webkit-transition: all 1.25s ease-in-out;
  transition: all 1.25s ease-in-out;
  -webkit-transition-delay: 1.75s;
          transition-delay: 1.75s;
}
.slide.active .content {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}
.slide.active .content .title {
  width: 25%;
  opacity: 1;
  -webkit-transform: translateY(30px);
          transform: translateY(30px);
  -webkit-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
  -webkit-transition-delay: 1.25s;
          transition-delay: 1.25s;
}
.slide.active .content .title:after {
  height: 100%;
  color: white;
  overflow: initial;
}
.slide.active .content .title:before {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
  -webkit-transition-delay: 2s;
          transition-delay: 2s;
}
.slide.active .content .city-info {
  opacity: 1;
}

.slide.active .content .emblem {
  opacity: 1;
  margin-top: 5%;
  -webkit-transform: translateY(100px);
          transform: translateY(100px);
}
.slide.active .btn-close {
  cursor: pointer;
  pointer-events: auto;
}
.slide.active .btn-close:before, .slide.active .btn-close:after {
  opacity: 1;
}
.slide.active .btn-close:after {
  -webkit-transform: rotate(45deg) translateX(0px);
          transform: rotate(45deg) translateX(0px);
}
.slide.active .btn-close:before {
  -webkit-transform: rotate(-45deg) translateX(0px);
          transform: rotate(-45deg) translateX(0px);
}
.slide.anim-in {
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
}
.slide.anim-in .image {
  top: -20%;
  left: -140%;
  height: 140%;
  width: 140%;
  -webkit-animation: img-anim-in 2s ease-in-out forwards;
          animation: img-anim-in 2s ease-in-out forwards;
}
.slide.anim-out {
  -webkit-box-flex: 0;
      -ms-flex: 0;
          flex: 0;
  cursor: default;
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
}

.slide.anim-out .image {
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  -webkit-animation: img-anim-out 1.2s ease-in-out forwards;
          animation: img-anim-out 1.2s ease-in-out forwards;
}
.slide:nth-of-type(1).anim-in .image {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}
.slide:nth-of-type(1).anim-out .image {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}
.slide:nth-of-type(2).anim-in .image {
  -webkit-animation-delay: 0.4s;
          animation-delay: 0.4s;
}
.slide:nth-of-type(2).anim-out .image {
  -webkit-animation-delay: 0.4s;
          animation-delay: 0.4s;
}
.slide:nth-of-type(3).anim-in .image {
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}
.slide:nth-of-type(3).anim-out .image {
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}
.slide:nth-of-type(4).anim-in .image {
  -webkit-animation-delay: 0.8s;
          animation-delay: 0.8s;
}
.slide:nth-of-type(4).anim-out .image {
  -webkit-animation-delay: 0.8s;
          animation-delay: 0.8s;
}
.slide .image {
  position: absolute;
  background-size: cover;
  background-position: center center;
  pointer-events: none;
  -webkit-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}
.slide .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-image: -webkit-linear-gradient(rgba(20, 20, 20, 0.7), rgba(20, 20, 20, 0.2));
  background-image: linear-gradient(rgba(20, 20, 20, 0.7), rgba(20, 20, 20, 0.2));
  background-position: 0 0;
  background-size: 100% 200%;
  opacity: 1;
  pointer-events: none;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.slide .content {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  pointer-events: none;
}
.slide .content .title {
  position: absolute;
  top: -10px;
  height: 65px;
  width: 100%;
  box-sizing: border-box;
  font-size: 3em;
  text-align: center;
  text-shadow: 0 2px 2px #2f2f2f;
  color: #3f3f3f;
  opacity: 0;
  pointer-events: none;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.slide .content .title:after {
  position: absolute;
  top: 0;
  height: 0;
  width: 100%;
  display: block;
  content: attr(data-title);
  overflow: hidden;
  color: #FFD700;
  -webkit-transition: all 0.85s ease-in-out;
  transition: all 0.85s ease-in-out;
}
.slide .content .title:before {
  position: absolute;
  bottom: 15px;
  display: block;
  content: "";
  height: 2px;
  width: 85%;
  background: white;
  box-shadow: 0 2px 6px #2f2f2f;
  -webkit-transform-origin: left center;
          transform-origin: left center;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transition: -webkit-transform 1.25s ease-in-out;
  transition: -webkit-transform 1.25s ease-in-out;
  transition: transform 1.25s ease-in-out;
  transition: transform 1.25s ease-in-out, -webkit-transform 1.25s ease-in-out;
}
.slide .content .emblem {
  position: absolute;
  height: 200px;
  width: 25%;
  opacity: 0;
  -webkit-transform: translateY(120px);
          transform: translateY(120px);
  -webkit-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
  -webkit-transition-delay: 1.75s;
          transition-delay: 1.75s;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: auto 100%;
}
.slide .content .city-info {
  position: absolute;
  bottom: 30px;
  right: 30px;
  padding: 30px 30px 30px 120px;
  font-size: 1.25em;
  color: white;
  text-shadow: 0 1px 4px #0f0f0f;
  opacity: 0;
  -webkit-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
  -webkit-transition-delay: 2s;
          transition-delay: 2s;
}

.slide .btn-close {
  position: absolute;
  z-index: 100;
  top: 20px;
  right: 20px;
  height: 24px;
  width: 24px;
  pointer-events: none;
}
.slide .btn-close:before, .slide .btn-close:after {
  position: absolute;
  top: 12px;
  display: block;
  content: "";
  width: 100%;
  height: 4px;
  background-color: white;
  opacity: 0;
  cursor: pointer;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.slide .btn-close:after {
  -webkit-transform: rotate(45deg) translateX(-12px);
          transform: rotate(45deg) translateX(-12px);
  -webkit-transition-delay: 3s;
          transition-delay: 3s;
}
.slide .btn-close:before {
  -webkit-transform: rotate(-45deg) translateX(12px);
          transform: rotate(-45deg) translateX(12px);
  -webkit-transition-delay: 3.2s;
          transition-delay: 3.2s;
}
.slide:hover:not(.active):not(.anim-out) .image {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.slide:hover:not(.active):not(.anim-out) .overlay {
  opacity: 0.6;
}
.slide:hover:not(.active):not(.anim-out) .content .title {
  opacity: 1;
  -webkit-transform: translateY(30px);
          transform: translateY(30px);
}
.slide:hover:not(.active):not(.anim-out) .content .title:after {
  height: 100%;
}

#codepen-link {
  position: absolute;
  left: 30px;
  bottom: 30px;
  height: 40px;
  width: 40px;
  z-index: 10;
  border-radius: 50%;
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/logo.jpg");
  background-position: center center;
  background-size: cover;
  opacity: 0.7;
  -webkit-transition: all 0.25s;
  transition: all 0.25s;
}
#codepen-link:hover {
  opacity: 1;
  box-shadow: 0 2px 6px #0f0f0f;
}

@-webkit-keyframes img-anim-in {
  to {
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
  }
}

@keyframes img-anim-in {
  to {
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
  }
}
@-webkit-keyframes img-anim-out {
  to {
    left: -100%;
  }
}
@keyframes img-anim-out {
  to {
    left: -100%;
  }
}


.navbar-default {
  background-color: rgba(0, 0, 0, 0.7) !important;
  border-color: transparent !important;
  margin-bottom: 0px !important;
}


.arrow {
  font-size: 30px;
  border-radius: 3px;
  background-color: rgba(0, 0, 0, 0.7);
  bottom: 10%;
  right: 5%;
  display:block;
  margin: 0 auto;
  padding-left: 15px;
  transition: all 1s;
  pointer-events: auto !important;
}

.arrow img {
  bottom: 10%;
  right: 5%;
  border-radius: 3px;
  animation: arrow 2s both infinite;

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

a {
    color: white !important;
    text-decoration: none !important;
}

</style>

@extends('layouts.app')

@section('content')

<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

<div id="container">
  <div class="slide anim-in">
    <div class="image" style="background-image: url(http://lafilledecorinthe.com/wordpress/wp-content/uploads/2015/05/Varini.jpg)"></div>
    <div class="overlay"></div>
    <div class="content">
      <h1 class="title" data-title="StreetArt">StreetArt</h1>
      <div class="emblem" style="background-image: url(http://icon-icons.com/icons2/537/PNG/512/paint-brush-2_icon-icons.com_52930.png)"></div>
      <ul class="city-info">
        <div class="arrow"><a href="article">Accéder</a><img src="http://marcelklacan.com/images/icon.png" alt="" /></div>
      </ul>
    </div>
    <div class="btn-close"></div>
  </div>
  <div class="slide anim-in">
    <div class="image" style="background-image: url(https://upload.wikimedia.org/wikipedia/fr/c/cf/Tours_Chassagne_et_Alicante.JPG)"></div>
    <div class="overlay"></div>
    <div class="content">
      <h1 class="title" data-title="Architecture">Architecture</h1>
      <div class="emblem" style="background-image: url(http://www.globalemployees.com/images/architectureIcon.png)"></div>
      <ul class="city-info">
        <div class="arrow"><a href="article">Accéder</a><img src="http://marcelklacan.com/images/icon.png" alt="" /></div>
      </ul>
    </div>
    <div class="btn-close"></div>
  </div>
  <div class="slide anim-in">
    <div class="image" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/8/88/Bir-Hakeim-3.jpg)"></div>
    <div class="overlay"></div>
    <div class="content">
      <h1 class="title" data-title="Perspective">Perspective</h1>
      <div class="emblem" style="background-image: url(http://icon-icons.com/icons2/865/PNG/512/Citycons_target_icon-icons.com_67938.png)"></div>
      <ul class="city-info">
        <div class="arrow"><a href="article">Accéder</a><img src="http://marcelklacan.com/images/icon.png" alt="" /></div>
      </ul>
    </div>
    <div class="btn-close"></div>
  </div>
  <div class="slide anim-in">
    <div class="image" style="background-image: url(https://leparisiencampagnard.files.wordpress.com/2014/02/parc-bagatelle-parisien-campagnard.jpg)"></div>
    <div class="overlay"></div>
    <div class="content">
      <h1 class="title" data-title="Nature"><a href="article">Nature</a></h1>
      <div class="emblem" style="background-image: url(http://icon-icons.com/icons2/564/PNG/512/Close_Up_Mode_icon-icons.com_54195.png)"></div>
      <ul class="city-info">
        <div class="arrow"><a href="article">Accéder</a><img src="http://marcelklacan.com/images/icon.png" alt="" /></div>
      </ul>
    </div>
    <div class="btn-close"></div>
  </div>





<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
(function(window, document, $, undefined) {
	var $slides, $btnArr;

	function onClick(e) {
		var $target = $(e.target);
		if ($target.hasClass('slide') && !$target.hasClass('active') && !$target.siblings().hasClass('active')) {
			$target.removeClass('anim-in last-viewed').addClass('active')
			$target.siblings().removeClass('anim-in last-viewed').addClass('anim-out');
		}
	}

	function closeSlide(e) {
		var $slide = $(e.target).parent();
		$slide.removeClass('active anim-in').addClass('last-viewed');
		$slide.siblings().removeClass('anim-out').addClass('anim-in');
	}

	$(function() {
		$slides = $('.slide');
		$btnArr = $slides.find('.btn-close');
		$slides.on('click', onClick);
		$btnArr.on('click', closeSlide);
	});
})(this, document, jQuery);
</script>


@endsection
