<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>aku ganteng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
.jumbotron{
    background-image: url('/image/kursi.jpg');
    background-position: center;
    background-size: cover;
    background-color: yellow
}
</style>
<body>  
    <!-- As a heading -->
<nav class="navbar navbar-success bg-success">
    <span class="navbar-brand mb-0 h1">Detail Pesanan</span>
    <a href="/makan" class="btn btn-danger">kembali</a>
 </nav>
      </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item dropdown">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"></a>
                    <a class="dropdown-item" href="#"></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"></a>
                </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled"></a>
                </li>
            </ul>    
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
          <div class="col">
             <div class="card">
                 <div class="card-body">
                    <div class="card-img">    
                 </div>
                      <div class="card-desc">
                        <img src="image/nasi.png" class="card-img-top" alt="...">
                        <h3></a></h3>
                        <h5></h5>
                        <p></p>
                          <table class="table">
                              <thead>
                                <tr>
                                    <th><a href="/makan/pesan/checkout" class="btn btn-primary">checkout</a><th>
                                  <th><p> TOTAL PEMBAYARAN : <P>
                                </tr>
                              </thead>
                          </table>    
                      </div>
                  </div>
              </div>
           </div>
        </div>
    </div>

    @yield('Detail')

 

    

  




    

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>

