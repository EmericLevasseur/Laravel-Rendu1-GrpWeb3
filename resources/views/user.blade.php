<style>

@import url('https://fonts.googleapis.com/css?family=Poiret+One');

body {
  background-image: url("https://www.pariszigzag.fr/wp-content/uploads/2016/11/etoiles-observation-paris-zigzag.jpg") !important;
  background-size: cover !important;
    font-family: 'Poiret One', cursive !important;

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

.profile{
  margin-top: 1%;
  width: 460px;
  box-shadow: 0 2px 20px 1px rgba(0, 0, 0, .14), 0 1px 20px 0 rgba(0, 0, 0, .12), 0 3px 10px -2px rgba(0, 0, 0, .2);
  padding: 8rem 0 0;
  background-color: #E6E6E6;
  position: relative;
  overflow: hidden;
  box-sizing: border-box;
}

.profile:before{
  content: "";
  width: 85px;
  height: 50px;

  transition: transform .5s cubic-bezier(0.42, 0.04, 0.13, 0.92);
  border-radius: 50%;
  background-color: black;

  position: absolute;
  top: -4rem;
  left: 50%;
  transform: translateX(-50%) scale(7);
}

.profile:hover:before{
  transition: transform .7s cubic-bezier(0.66, 0.09, 0, 1.31);
}

.profile:hover:before{
    transform: translateX(-50%) translateY(200%) scale(25);
}

.profile:hover, .profile:hover .profile__value{
  color: #fff;
}

.profile:hover .profile__group, .profile:hover .profile__avatar, .profile:hover .profile__social{
  border-color: #fff;
}

.profile:hover .profile__row{
  background-color: #1C1C1C;
}

.profile__header{
  text-align: center;
  position: relative;
  z-index: 2;
}

.profile__avatar{
  border-radius: 50%;
  width: 14rem;
  height: 14rem;
  border: 2px solid black;
  transition: border-color .4s ease-out .1s;
}

.profile__article{
  border-radius: 50%;
  width: 14rem;
  height: 14rem;
  transition: border-color .4s ease-out .1s;
}

.profile__article:hover{
  border: 2px solid white !important;
}

.profile:hover .profile__avatar{
  transition: border-color .4s ease-out .2s;
}

.profile__name{
  margin-top: 1rem;
  margin-bottom: 0;
  font-size: 3.5rem;
  transition: color .4s ease-out .1s;
}

.profile__post{
  display: block;
  font-size: 1.8rem;
  transition: color .4s ease-out .1s;
}

.profile__body{
  margin-top: 4rem;
  margin-bottom: 4rem;
  padding-bottom: 7%;
}

.profile__row{
  display: flex;
  justify-content: flex-start;
  flex-wrap: wrap;

  background-color: #f0f0f0;
  padding-top: 3rem;
  padding-bottom: 3rem;

  position: relative;
  z-index: 2;
  transition: background-color .4s ease-out .1s;
}

.profile:hover .profile__row{
  transition: background-color .4s ease-out .2s;
}


.profile__group{
  box-sizing: border-box;
  width: 33.3333333%;
  margin-top: 4rem;
  transition: border-color .4s ease-out .1s;

  border-right: 1px solid #BDBDBD;
  padding-left: 2%;
  padding-right: 2%;
  text-align: center;
}

profile:hover .profile__group{
  transition: border-color .4s ease-out .4s;
}

.profile__group:nth-child(1), .profile__group:nth-child(2),
.profile__group:nth-child(3){
  margin-top: 0;
}

.profile__group:nth-child(3n+3){
  border-right: none;
}

.profile__param, .profile__value{
  display: block;
  transition: color .4s ease-out .1s;
}

.profile__param{
  text-transform: uppercase;
  margin-top: .2rem;
}

.profile__value{
  font-size: 3.4rem;
  color: #7B1FA2;
  font-weight: 700;
}

.profile__footer{
  padding-bottom: 3rem;
  display: flex;
  justify-content: center;
  align-items: center;
}

.cssui-icon{
  width: var(--cssuiIconSize, 2em);
  height: var(--cssuiIconSize, 2em);
  display: inline-block;

  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size: contain;
}

.profile__social{
  border: 2px solid #7B1FA2;
  border-radius: 50%;

  margin-left: .8rem;
  margin-right: .8rem;
  padding: 1rem;
  font-size: .8rem;

  position: relative;
  z-index: 2;
}

.profile__social:hover{
  background-color: #7B1FA2;
}

.cssui-social{
  display: inline-flex;
  position: relative;
}

.cssui-social__name{
  position: absolute;
  left: -9999px;
}

.profile__twitter{
  background-image: url("https://stas-melnikov.ru/codepen/icons/twitter_purple.svg");
}

.profile__linkedin{
  background-image: url("https://stas-melnikov.ru/codepen/icons/linkedin_purple.svg");
}

.profile__codepen{
  background-image: url("https://stas-melnikov.ru/codepen/icons/codepen_purple.svg");
}

.profile:hover  .profile__twitter{
  background-image: url("https://stas-melnikov.ru/codepen/icons/twitter.svg");
}

.profile:hover  .profile__linkedin{
  background-image: url("https://stas-melnikov.ru/codepen/icons/linkedin.svg");
}

.profile:hover  .profile__codepen{
  background-image: url("https://stas-melnikov.ru/codepen/icons/codepen.svg");
}

/*
* demo styles
*/

@media screen and (min-width: 769px){

  html{
    font-size: 62.5%;
  }
}

@media screen and (min-width: 641px) and (max-width: 768px){

  html{
    font-size: 56%;
  }
}

@media screen and (max-width: 640px){

  html{
    font-size: 50%;
  }
}

body{
  font-family: "Roboto Condensed", "Arial", sans-serif;
  font-size: 1.6rem;
  font-weight: 300;
  margin: 0;
  -webkit-overflow-scrolling: touch;
  background-image: linear-gradient(29deg, #512DA8 50%, #673AB7 50%);
}

a{
  text-decoration: none;
  color: #fff;
}

a:hover, a:focus{
  text-decoration: underline;
}

.page{
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.demo{
  flex-grow: 2;
}

.main-container{
  padding-left: 1rem;
  padding-right: 1rem;
  display: flex;
  justify-content: center;
  align-items: center;
}

.footer{
  margin-top: 3rem;
  padding-top: 1rem;
  padding-bottom: 1rem;
}

@media screen and (max-width: 640px){

  .footer{
    font-size: 1.4rem;
  }
}

.footer__container{
  display: flex;
  justify-content: center;
}

@-webkit-keyframes sheen {
  0% {
    -webkit-transform: skewY(-45deg) translateX(0);
            transform: skewY(-45deg) translateX(0);
  }
  100% {
    -webkit-transform: skewY(-45deg) translateX(12.5em);
            transform: skewY(-45deg) translateX(12.5em);
  }
}
@keyframes sheen {
  0% {
    -webkit-transform: skewY(-45deg) translateX(0);
            transform: skewY(-45deg) translateX(0);
  }
  100% {
    -webkit-transform: skewY(-45deg) translateX(12.5em);
            transform: skewY(-45deg) translateX(12.5em);
  }
}
.wrapper {
  position: relative;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.button {
  padding: 0.75em 2em;
  left: 50%;
  color: black !important;
  text-align: center;
  text-decoration: none;
  text-shadow: 1px 1px 1px black !important;
  color: white !important;
  border: 2px solid black;
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


</style>
@extends('layouts.app')

@section('content')

<div class="page">
  <div class="demo">
    <div class="main-container">
      <article class="profile">
        <header class="profile__header">
          <img src="http://christine-photographe.com/wp-content/uploads/2016/10/photographe-professionnel-%C3%A0-toulon-dans-le-var-600x600.jpg" class="profile__avatar" alt="avatar of Stas Melnikov">
          <h3 class="profile__name">Emma</h3>
          <span class="profile__post">emma@gmail.com</span>
        </header>
        <div class="profile__body">
          <div class="profile__row">
            <div class="profile__group">
              <span class="profile__value"><img src="https://www.sneak-art.com/wp-content/uploads/2016/06/Mur-Street-Art-Obey-Paris-13-Lionel-Belluteau.jpg" class="profile__article" alt="avatar of Stas Melnikov"></span>
              <span class="profile__param">Obey Propaganda</span>
            </div>
            <div class="profile__group">
              <span class="profile__value"><img src="https://r.lvmh-static.com/uploads/2015/02/fondation-louis-vuitton-casacade-1584x876.jpg" class="profile__article" alt="avatar of Stas Melnikov"></span>
              <span class="profile__param">Fondation Louis Vitton</span>
            </div>
            <div class="profile__group">
              <span class="profile__value"><img src="http://lafilledecorinthe.com/wordpress/wp-content/uploads/2015/05/Varini.jpg" class="profile__article" alt=""></span>
              <span class="profile__param">Arc de la batterie</span>
            </div>
          </div>
        </div>
        <footer class="profile__footer profile__socials">
          <div class="wrapper">
            <a href="{{ url('/editUser') }}" class="button">Modifier</a>
          </div>
       </footer>
      </article>
    </div>
  </div>
</div>

@endsection
