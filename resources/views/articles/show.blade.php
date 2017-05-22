<style>
@import url('https://fonts.googleapis.com/css?family=Poiret+One');

body {
  margin: 0;
  background: black !important;
  font-family: 'Poiret One', cursive !important;
}
img {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -100;
    background-size: 100%;
    transition: 1s opacity;
}

#polina {
  font-weight:100;
  background: rgba(0,0,0,0.7);
  color: white;
  padding: 2rem;
  width: 33%;
  margin:2rem;
  float: left;
  font-size: 1.2rem;
  animation-duration: 1s;
  animation-delay: 0.4s;
  transition: all 1s;
}
h1 {
  font-size: 18px !important;
  margin-top: 0;
  font-weight: bold !important;
  text-align: center;
}


.adresse {
  font-weight: bold !important;
  font-size: 18px !important;
}

p {
  font-size: 15px !important;
  padding-top: 10px;
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

#polina button {
  display: block;
  width: 50%;
  padding: .4rem;
  border: none;
  margin: 1rem auto;
  font-size: 1.3rem;
  background: rgba(255,255,255,0.23);
  color: #fff;
  border-radius: 3px;
  cursor: pointer;
  transition: .3s background;
}
#polina button:hover {
   background: rgba(0,0,0,0.5);
}

.arrow {
  position: absolute;
  font-size: 60px;
  border-radius: 3px;
  color: #FFD700;
  background-color: rgba(0, 0, 0, 0.7);
  bottom: 10%;
  right: 5%;
  margin: 0 auto;
  display: block;
  padding-left: 15px;
  padding-right: 15px;
  transition: all 1s;
  animation-duration: 1s;
  animation-delay: 0.3s;
}

.arrow:hover {
    background-color: rgba(0, 0, 0, 0.9);
}

#polina:hover {
    background-color: rgba(0, 0, 0, 0.9);
}

</style>

@extends('layouts.app')

@section('content')

<img src="https://r.lvmh-static.com/uploads/2015/02/fondation-louis-vuitton-casacade-1584x876.jpg" id="bgvid">
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<div class="arrow animated fadeInRight">Fondation Louis Vitton</div>
<div id="polina" class="animated fadeInleft">
<h1>Auteur de l'article : Emeric</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta dictum turpis, eu mollis justo gravida ac. Proin non eros blandit, rutrum est a, cursus quam. Nam ultricies, velit ac suscipit vehicula, turpis eros sollicitudin lacus, at convallis mauris magna non justo. Etiam et suscipit elit. Morbi eu ornare nulla, sit amet ornare est. Sed vehicula ipsum a mattis dapibus. Etiam volutpat vel enim at auctor.</p>
<p class="adresse">Adresse : 34 Rue Rivoli - Paris</p>
<button>Réagir</button>
<center><a href="#" class="like btn btn-success">{{Auth::user()->likes()->where('article_id', $article->id)->first() ? Auth::user()->likes()->where('article_id', $article->id)->first()->like == 1 ?'You like this article':'like':'like' }}</a>
<a href="#"  class="like btn btn-danger">{{Auth::user()->likes()->where('article_id', $article->id)->first() ? Auth::user()->likes()->where('article_id', $article->id)->first()->like == 0 ? 'You dont like this article':'dislike':'dislike' }}</a>
</center>
</div>

@endsection
