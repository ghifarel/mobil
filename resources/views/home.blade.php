@extends('template')

@section('isi halaman')
<br>
<br>
<body class="body bg-dark text-white">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="storage/slider1.jpg" class="d-block w-100" alt="..." style="width:100%; height:700px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>LS Series</h5>
        <p>THE EVOLUTION OF A MASTERPIECE</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="storage/slider2.jpg" class="d-block w-100" alt="..." style="width:100%; height:700px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>THE LM SERIES</h5>
        <p>A NEW SPACE FOR LUXURY </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="storage/slider3.jpg" class="d-block w-100" alt="..." style="width:100%; height:700px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>THE RX SERIES</h5>
        <p>AN ICONIC DRIVE JUST GOT MORE LUXURIOUS</p>
      </div>
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
      <h1><center>LEXUS LINE UP</h1>
      <div class="alert alert-danger alert-dismissible fade show" id="exampleAlert" role="alert">
        <strong>UPS!</strong>
        Silahkan Login Terlebih Dahulu!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="card" style="max-width 20rem;">
            <div class="card-img-top bg-dark">
              <img src="{{asset('storage/lm300.png')}}" alt="Card image cap" style="width: 100%; height:300px; object-fit: contain" onclick="alert()">  
              <div class="card-body bg-dark text-white">
                <h5 class="card-title">Lexus LM350h 4 seater</h5>
                <p class="card-text"><li>3.5L V6</li></p>
                <p class="card-text"><li>Airbags : Complete Surrounding</li></p>
                <p class="card-text"><li>ABS with Brake Assist, Electronic Parking Brake, VSC</li></p>
                <p class="card-text"><li>295Hp</li></p>
                <p class="card-text">Rp 3.500.000.000</p>
                <br>
                <input type="button" class="btn btn-success" value="beli">
                <a class="btn btn-primary" href="lm" role="button">Detail</a>
              </div>
            </div>
          </div>  
        </div>
        <div class="col-4"> 
          <div class="card" style="max-width 20rem;">
            <div class="card-img-top bg-dark">
              <img src="{{asset('storage/ls500.png')}}" alt="Card image cap" style="width: 100%; height:300px; object-fit: contain" onclick="alert()">
              <div class="card-body bg-dark text-white">
                <h5 class="card-title">Lexus LS500 Luxury</h5>
                <p class="card-text"><li>3.5L Twin-Turbo V6</li></p>
                <p class="card-text"><li>Airbags : 14</li></p>
                <p class="card-text"><li>ABS with Brake Assist, Electronic Parking Brake, VSC</li></p>
                <p class="card-text"><li>415Hp</li></p>
                <p class="card-text">Rp 3.000.000.000</li></p>
                <br>
                <input type="button" class="btn btn-success" value="beli">
                <a class="btn btn-primary" href="ls" role="button">Detail</a>
              </div>
            </div> 
          </div> 
        </div>
        <div class="col-4">
          <div class="card" style="max-width 20rem;">
            <div class="card-img-top bg-dark">
              <img src="{{asset('storage/rx300.png')}}" alt="Card image cap" style="width: 100%; height:300px; object-fit: contain" onclick="alert()">  
              <div class="card-body bg-dark text-white">
                <h5 class="card-title">Lexus RX300 Fsport</h5>
                <p class="card-text"><li>1,998 cc Turbo</li></p>
                <p class="card-text"><li>Airbags : 10</li></p>
                <p class="card-text"><li>ABS with Brake Assist, Electronic Parking Brake, VSC</li></p>
                <p class="card-text"><li>235Hp</li></p>
                <p class="card-text">Rp 900.000.000</p>
                <br>
                <input type="button" class="btn btn-success" value="beli">
                <a class="btn btn-primary" href="rx" role="button">Detail</a>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </body>
@endsection