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
@if (Storage::disk('local')->has($article->title . '-' . $user->id . '.jpg'))
  <img id="bgvid" src="{{ route('account.image', ['filename' => $article->title . '-' . $user->id . '.jpg']) }}">
@endif
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<div class="arrow animated fadeInRight">
  {{$article->title}}
</div>
<div id="polina" class="animated fadeInleft">
  <h1>
    Auteur de l'article : {{$user->name}}
  </h1>
  <p>
    {{$article->content}}
  </p>
  <p class="adresse">
    Adresse : {{$article->adresse}}
  </p>
  <button>Réagir</button>
  <article class="" data-postid="{{$article->id}}">
    <center>
      <a href="#" class="like btn btn-success">{{Auth::user()->likes()->where('article_id', $article->id)->first() ? Auth::user()->likes()->where('article_id', $article->id)->first()->like == 1 ?'Vous aimez':'J\'aime':'J\'aime' }}</a>
      <a href="#"  class="like btn btn-danger">{{Auth::user()->likes()->where('article_id', $article->id)->first() ? Auth::user()->likes()->where('article_id', $article->id)->first()->like == 0 ? 'Vous n\'aimez pas':'J\'aime pas':'J\'aime pas' }}</a>
    </center>
    <center><button>Supprimer l'article</button></center>

  </article>

        <div class="espace-commentaire">
          @if (!empty($article->comments))
        <h2>Liste des commentaires</h2>
        @foreach($article->comments AS $comment)
            <div style="border-left:3px solid orange; padding-left:10px;">
                <p>
                    {{ $comment->comment }}
                </p>
                @if($comment->user)
                  <div class="info">
                    Posted by {{ $comment->user->name  }} on {{$article->created_at}}
                    @if (Auth::user()->isAdmin == 1|| $article->user_id == Auth::user()->id)
                    <form action="{{ route('destroyComment', $comment->id) }}" method="post" style="display: inline-block;">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                    @else
                    @endif
                  </div>
                @endif
            </div>
            <hr>

        @endforeach
        @else
          <h2>Aucun commentaire</h2>
        @endif

        <form action="{{ route('article.comment', $article->id) }}" method="post">
            {{ csrf_field() }}
            <textarea name="comment" class="form-control" placeholder="Votre commentaire"></textarea>
            <div class="space">
          </div>
            <center><button class="btn btn-primary">Envoyer</button></center>
        </form>
        </div>
</div>

</div>
<script>
  var token ='{{ Session::token() }}'
  var urlLike ="{{ route('article.like') }}"
</script>
@endsection
