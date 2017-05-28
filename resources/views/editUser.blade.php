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
  <section class="row new-post">
    <div class="col-md-6 col-md-offset-3">
      <div class="bloc">
      <header>
        <center><h3>
          Modifier votre profil
        </h3></center>
        <div class="space">
      </div>
      </header>
      <form class="" action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
          @if (Storage::disk('local')->has($user->name . '-' . $user->id . '.jpg'))
            <section class="row new-post">
              <center>
                <img style="max-width:150px" class="radius" src="{{ route('account.image', ['filename' => $user->name . '-' . $user->id . '.jpg']) }}">
              </center>
            </section>
          @endif
          <label for="name">Pseudo</label>
          <input type="text" name="name" class="form-control" value="{{$user->name}}">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" class="form-control" value="{{$user->email}}">
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" name="image" class="form-control">
        </div>
        <div class="space">
      </div>
        <center><button type="submit" name="button" class="button">Sauvegarder</button></center>
        <input type="hidden" name="_token" value="{{ Session::token()}}">
      </form>
    </div>
  </div>
  </section>
@endsection
