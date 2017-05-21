<style>
html, body {
  height: 100vh;
  width: 100vw;
  box-sizing: border-box;
    background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1)) !important;
    background-repeat: no-repeat !important;
background-attachment: fixed !important;
}

body {
  background: #1f1f1f;
  font-family: "Raleway", sans-serif;
}

h1, h2, h3, h4 {
  font-family: "Abril Fatface", serif;
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
.slide.anim-in {
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
}
.slide.anim-in .image {
  top: -20%;
  left: -140%;
  height: 140%;
  width: 140%;
  -webkit-animation: img-anim-in 1.2s ease-in-out forwards;
          animation: img-anim-in 1.2s ease-in-out forwards;
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


.slide:hover:not(.active):not(.anim-out) .image {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
          opacity: 0.3;
}

.slide:hover:not(.active):not(.anim-out) .content .title {
  opacity: 1;
  -webkit-transform: translateY(30px);
          transform: translateY(30px);
}
.slide:hover:not(.active):not(.anim-out) .content .title:after {
  height: 100%;
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

.narvar {
  margin-bottom: 0px !important;
}

</style>

@extends('layouts.app')

@section('content')


<div id="container">
  <div class="slide anim-in">
    <div class="image" style="background-image: url(http://md1.libe.com/photo/794070-terrain-de-basket-ball-pigalle.jpg?modified_at=1437571148&width=960)"></div>
    <div class="content">
      <h1 class="title" data-title="StreetArt">StreetArt</h1>
    </div>
  </div>
  <div class="slide anim-in">
    <div class="image" style="background-image: url(https://upload.wikimedia.org/wikipedia/fr/c/cf/Tours_Chassagne_et_Alicante.JPG)"></div>
    <div class="content">
      <h1 class="title" data-title="Design">Design</h1>
    </div>
  </div>
  <div class="slide anim-in">
    <div class="image" style="background-image: url(http://farm6.staticflickr.com/5105/5697592372_1099938192_b.jpg)"></div>
    <div class="content">
      <h1 class="title" data-title="Monuments">Monuments</h1>
    </div>
  </div>
  <div class="slide anim-in">
    <div class="image" style="background-image: url(http://www.pavillon-courcelles-parc-monceau.com/_data/Hotels/20/Hotels/20/fond-rotonde-a-colonnes-parc-monceau-1920x1070.jpg)"></div>
    <div class="content">
      <h1 class="title" data-title="Nature">Nature</h1>
    </div>
  </div>
</div>


@endsection
