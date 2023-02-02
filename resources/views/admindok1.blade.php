<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Legal Budy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg" style="background-color: #2C344C;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><b>Legal Buddy</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link" href="#admindokum">Administrasi dokumen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#firmahukum">Firma Hukum</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            @if (auth()->check())
            <li class="nav-item">
              <a class="nav-link" href="#">Hi, {{ Auth::user()->fname }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-outline-warning" href="/logout">Logout</a>
            </li>
            @else 
            <li class="nav-item">
             <a class="nav-link btn btn-outline-warning " href="/login">Login</a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="album py-2 bg-light " style="margin-top: 100px; align-items:center; padding-left:170px">
      <div class="container">
        <div class="row">
  
  
          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img src="image/boarding-pass.png" class="card-img-top" style="margin-top: 20px;" alt="..." width="100%" height="100%" >
              <div class="card-body">
              <h5 class="card-title">Mengurus Paspor</h5>
              </div>
            </div>
          </div>
        
          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img src="image/visa.png" class="card-img-top" style="margin-top: 20px;" alt="..." width="100%" height="100%" >
              <div class="card-body">
              <h5 class="card-title">Mengurus Visa</h5>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img src="image/coverage.png" class="card-img-top" style="margin-top: 20px;" alt="..." width="100%" height="100%" >
              <div class="card-body">
              <h5 class="card-title">Asuransi Perjalanan</h5>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img src="image/prescription.png" class="card-img-top" style="margin-top: 20px;" alt="..." width="100%" height="100%" >
              <div class="card-body">
              <h5 class="card-title">Sertifikat Kesehatan</h5>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img src="image/permit.png" class="card-img-top" style="margin-top: 20px;" alt="..." width="100%" height="100%" >
              <div class="card-body">
              <h5 class="card-title">Exit&Entry Permit</h5>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>

  <br><br><br>
<section>
  <div>
    <a href="https://tanjungperak.imigrasi.go.id/berita-138-tips-and-tricks-pengurusan-paspor.html">
      <img src="/image/admdok1.png" class="rounded mx-auto d-block" style="width: 50%; ">
    </a>
  </div>
  <div style="margin-bottom: 20px"><br><br><br>
    <h2 style="text-align:center; ">Website Resmi<span style="color: #F07D00"> Kemenlu RI<span></h2>
    <a href="https://www.kemlu.go.id/">
      <img src="/image/kemenlu.png" class="rounded mx-auto d-block" style="width: 50%; ">
    </a>
  </div>
</section>
  

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>