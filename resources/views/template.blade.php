<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lexus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="lexus">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lm">LM Series</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ls">LS Series</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rx">RX Series</a>
          </li>
        </ul>
      </div>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Masuk</button>
      </nav>
      <!--Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-dark text-white">
              <h5 class="modal-title" id="exampleModalLabel">Silahkan Masuk</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-lebel="Close">
                <span aria-hidden="true">X</span>
              </button>
            </div>
            <div class="modal-body bg-dark text-white">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Selalu Masuk</label>
                </div>
                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleAlert">Submit</button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myRegist">Create Account</button>

              <div id="myRegist" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
  
                    <div class="modal-header bg-dark text-white">
                      <h5 class="modal-title" id="exampleModalLabel">Create Your Account</h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body bg-dark text-white">
                      <form>
                        <div class="form-group">
                          <label for="expaleInputEmail">Username</label>
                          <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Your Username">
                        </div>
                        <div class="form-group">
                          <label for="expaleInputEmail">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                          <label for="expaleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Enter Your Password">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck2"  placeholder="Password">
                          <label class="form-check-label" for="exampleCheck2">The data entered is correct</label>
                        </div>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myRegist">
                          Create Account
                        </button>

                        
                      </form>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      @yield('isi halaman')
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>  
    </body>
<!--footer-->
<footer class="footer bg-gradient-dark text-white" style="height: 200px; padding: 50px;">
  <div class="row">
    <div class="col">
      <h5>Discover Lexus</h5>
      <p><a href="#">About Lexus</a></p>
      <p><a href="#">Lexus Pursuits</a></p>
      <p><a href="#">News & Events</a></p>
      <p><a href="#">Press Room</a></p>
    </div>
    <div class="col">
      <h5>Contact Us</h5>
      <p><a href="#">Find a Dealer</a></p>
      <p><a href="#">Book a Test Drive</a></p>
    </div>
    <div class="col">
    <p>Join us on  Facebook,  Instagram,  Twitter,  YouTube</p>
    </div> 
  </div>
</footer>
