@extends('template')

@section('isi halaman')
<br>
<br>
<body class="body bg-dark text-white"> 
<div class="row">
    <div class="col-12"> 
      <img src="storage/slider1.jpg" alt="" style="width: 100%; height:800px;">
</div>
<br>
<br>
<div class="row">
    <div class="col-7">
        <br>
        <img src="{{asset('storage/thels.jpg')}}" alt="" style="width: 100%; height:450px;">
    </div>
    <div class="col">
        <br>
        <h1>THE LS SERIES</h1>
        <p>Inspiring, alluring and evocative. A cut above the rest. Our flagship model is a world-class vehicle that is the pinnacle of luxury performance.</p>
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
            <img src="storage/sliderls1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="storage/sliderls2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="storage/sliderls3.jpg" class="d-block w-100" alt="...">
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
    <h3>LS 500</h3>
    <div class="col-5">
        <img src="storage/ls500.jpg">
    </div>
    <div class="col">
        <br>
        <P><center><h5>415</P> 
        <P>HORSE POWER</P></h5>
    </div>
    <div class="col">
        <br>
        <P><center><h5>5.0sec</P> 
        <P>Acceleration (0-100 km/h)</P></h5>
    </div>
    <div class="col">
        <br>
        <P><center><h5>250 Km/h</P> 
        <P>Max Speed</P></h5>
    </div>
</div>
</div>
<div class="row bg-light text-dark">
    <h3>LS 500h Luxury</h3>
    <div class="col-5">
        <img src="storage/ls500h.jpg">
    </div>
    <div class="col">
        <br>
        <P><center><h5>254</P> 
        <P>HORSE POWER</P></h5>
    </div>
    <div class="col">
        <br>
        <P><center><h5>5.4 sec</P> 
        <P>Acceleration (0-100 km/h)</P></h5>
    </div>
    <div class="col">
        <br>
        <P><center><h5>250 Km/h</P> 
        <P>Max Speed</P></h5>
    </div>
</div>
</body>