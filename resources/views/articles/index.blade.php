<style>
body {
  background-color: black;
}
div, div::before, div::after,
img,
span {
  -webkit-transition: all 1s;
  transition: all 1s;
}

img {
  height: auto;
  width: 100%;
}

div {
  float: left;
  position: relative;
  overflow: hidden;
}
div:hover img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
div:hover span {
  opacity: 1;
}
div::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
}

div:hover::after {
  opacity: 1;
}

span {
  color: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 3;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  opacity: 0;
  text-align: center;
  text-transform: uppercase;
  text-shadow: 0 0 4px rgba(0, 0, 0, 0.65);
  font: bold 20px sans-serif;
}

@media screen and (min-width: 760px) {
  div {
    width: 25%;
  }
}

</style>
<body>
<a href="home"><div><img src="http://unsplash.it/620?image=0"><span>Paris</span></div></a>
<div><img src="http://unsplash.it/620?image=10"><span>Send</span></div>
<div><img src="http://unsplash.it/620?image=20"><span>Send</span></div>
<div><img src="http://unsplash.it/620?image=30"><span>Send</span></div>
<div><img src="http://unsplash.it/620?image=40"><span>Send</span></div>
<div><img src="http://unsplash.it/620?image=50"><span>Send</span></div>
<div><img src="http://unsplash.it/620?image=60"><span>Send</span></div>
<div><img src="http://unsplash.it/620?image=70"><span>Send</span></div>
<div><img src="http://unsplash.it/620?image=80"><span>Send</span></div>
<div><img src="http://unsplash.it/620?image=90"><span>Send</span></div>
<div><img src="http://unsplash.it/620?image=100"><span>Send</span></div>
<div><img src="http://unsplash.it/620?image=100"><span>Send</span></div>
</body>
