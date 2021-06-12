@extends('template')

@section('isi halaman')
<br>
<br>
<body class="body bg-dark text-white"> 
<div class="row">
    <div class="col-12"> 
      <img src="storage/slider3.jpg" alt="" style="width: 100%; height:800px;">
</div>
<br>
<br>
<div class="row">
    <div class="col-7">
        <br>
        <img src="{{asset('storage/rx.jpg')}}" alt="" style="width: 100%; height:450px;">
    </div>
    <div class="col">
        <br>
        <h1>THE RX SERIES</h1>
        <p>With sculpted lines, remarkable LED illumination, latest technology and bold, iconic accents, our top-selling SUV sets the standard for luxury crossovers. Take your drive to the next level with the RX.</p>
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
            <img src="storage/sliderrx.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="storage/sliderrx2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="storage/sliderrx3.jpg" class="d-block w-100" alt="...">
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
    <h3>RX 300 Luxury</h3>
    <div class="col-5">
        <img src="storage/rx300l.png">
    </div>
    <div class="col">
        <br>
        <P><center><h5>200</P> 
        <P>HORSE POWER</P></h5>
    </div>
    <div class="col">
        <br>
        <P><center><h5>9.2 sec</P> 
        <P>Acceleration (0-100 km/h)</P></h5>
    </div>
    <div class="col">
        <br>
        <P><center><h5>235 Km/h</P> 
        <P>Max Speed</P></h5>
    </div>
</div>
</div>
<div class="row bg-light text-dark">
    <h3>RX 300 F Sport</h3>
    <div class="col-5">
        <img src="storage/rx300f.png">
    </div>
    <div class="col">
        <br>
        <P><center><h5>200</P> 
        <P>HORSE POWER</P></h5>
    </div>
    <div class="col">
        <br>
        <P><center><h5>9.2 sec</P> 
        <P>Acceleration (0-100 km/h)</P></h5>
    </div>
    <div class="col">
        <br>
        <P><center><h5>235 Km/h</P> 
        <P>Max Speed</P></h5>
    </div>
</div>
</body>