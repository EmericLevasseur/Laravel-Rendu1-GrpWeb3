<style>

@import url('https://fonts.googleapis.com/css?family=Poiret+One');

body {
  background-image: url("https://www.pariszigzag.fr/wp-content/uploads/2016/11/etoiles-observation-paris-zigzag.jpg") !important;
  background-size: cover !important;
  font-family: 'Poiret One', cursive !important;
  color: white !important;

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

    .title {
        font-size: 50px;
        color: white;
    }
    .space {
      text-align: center;
      margin-bottom: 30px;
    }
    .table-white {
      background-color: white;
      border: 2px solid black !important;
    }
    .btn-taille {
      width: 100px;
    }
    .radius {
      border-radius: 120px;
    }

    .button {
      padding: 0.75em 2em;
      background-color: black;
      color: white !important;
      border: 1px solid white;
      text-align: center;
      text-decoration: none;
      text-shadow: 1px 1px 1px black !important;
      color: white !important;
      font-size: 24px;
      display: inline-block;
      border-radius: 0.3em;
      -webkit-transition: all 0.2s ease-in-out;
      transition: all 0.2s ease-in-out;
      position: relative;
      overflow: hidden;
    }
    .button:before {
      content: "";
      background-color: rgba(255, 255, 255, 0.5);
      height: 100%;
      width: 3em;
      display: block;
      position: absolute;
      top: 0;
      left: -4.5em;
      -webkit-transform: skewX(-45deg) translateX(0);
              transform: skewX(-45deg) translateX(0);
      -webkit-transition: none;
      transition: none;
    }
    .button:hover {
      border: 2px solid #2194E0;
      background-color: #2194E0;
      color: white !important;
      border-bottom: 4px solid #1977b5;
    }
    .button:hover:before {
      -webkit-transform: skewX(-45deg) translateX(13.5em);
              transform: skewX(-45deg) translateX(13.5em);
      -webkit-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
    }

    .bloc {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 5%;
      margin: 10%;

    }
</style>

@extends('layouts.app')
@section('content')

@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
  <div class="bloc">
<div class="container">
  <div class="col-md-9">
  <div class="title m-b-md">
      <center>Modifier l'article {{ $article->title }}</center>
  </div>
  <div class="space">
</div>
<form method="POST" action="{{route('article.update', $article->id)}}">
  {{csrf_field()}}
  <div class="form-group">
  <input class="form-control" type="hidden" name="_method" value="PUT">
  <input class="form-control" type="text" name="title" value="{{ $article->title }}" placeholder="Titre">
  <br>
  <textarea class="form-control" name="content" id=""  placeholder="Contenu" cols="30" rows="10">{{ $article->content }}</textarea>
  <br>
  <div class="space">
</div>
        <center><button type="submit" name="button" class="button">Modifier</button></center>
</form>
</div>
</div>
</div>
</div>

@endsection
