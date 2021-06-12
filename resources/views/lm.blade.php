@extends('template')

@section('isi halaman')
<br>
<br>
<body class="body bg-dark text-white"> 
<div class="row">
    <div class="col-12"> 
      <img src="storage/slider2.jpg" alt="" style="width: 100%; height:800px;">
</div>
<br>
<br>
<div class="row">
    <div class="col-7">
        <br>
        <img src="{{asset('storage/lm.jpg')}}" alt="" style="width: 100%; height:450px;">
    </div>
    <div class="col">
        <br>
        <h1>THE LM SERIES</h1>
        <p>Exceptional comfort and refined convenience with an unrivalled chauffered experience.
        The Luxury Mover reimagines the essence of luxury vehicles and is made for those who appreciate the highest level of style and comfort when on the move.</p>
    </div>
</div>
<H1>GALLERY</H1>
<br>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="storage/sliderlm1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="storage/sliderlm2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="storage/sliderlm3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
</div>
<div class="row bg-light text-dark">
    <h3>LM 350 4 SEATER</h3>
    <div class="col-5">
      <img src="storage/4seater.png">
    </div>
    <div class="col">
      <br>
      <br>
      <P><center><h5>295</P> 
      <P>HORSE POWER</P></h5>
    </div>
    <div class="col">
      <br>
      <br>
      <P><center><h5>8.3 sec</P> 
      <P>Acceleration (0-100 km/h)</P></h5>
    </div>
    <div class="col">
      <br>
      <br>
      <P><center><h5>180 Km/h</P> 
      <P>Max Speed</P></h5>
    </div>
  </div>
<div class="row bg-light text-dark">
    <h3>LM 350 7 SEATER</h3>
    <div class="col-5">
      <img src="storage/4seater.png">
    </div>
    <div class="col">
      <br>
      <br>
      <P><center><h5>295</P> 
      <P>HORSE POWER</P></h5>
    </div>
    <div class="col">
      <br>
      <br>
      <P><center><h5>8.3 sec</P> 
      <P>Acceleration (0-100 km/h)</P></h5>
    </div>
    <div class="col">
      <br>
      <br>
      <P><center><h5>180 Km/h</P> 
      <P>Max Speed</P></h5>
    </div>
  </div>
</body>