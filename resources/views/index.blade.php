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



<!-- navbar-->

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
              <a class="nav-link" href="#admindokum" >Administrasi dokumen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#firmahukum">Firma Hukum</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact-us">Contact</a>
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

  <!-- info untuk kamu-->
  <div class="informasi" style="padding-left: 100px; padding-right: 100px; ">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>

      <div class="carousel-inner" style="margin-top: 100px;">
        <div class="carousel-item active">
          <img class="bd-placeholder-img" width="100%" height="100%" style = "border-radius: 20px" src="/infocontent/1.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="100%" style = "border-radius: 20px" src="/infocontent/2.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="100%" style = "border-radius: 20px" src="/infocontent/3.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="100%" style = "border-radius: 20px" src="/infocontent/4.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- adminis dokum-->
  <section id="admindokum">
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
        <div style="padding-left: 30px; margin-bottom: 20px">
          <h2>Administrasi Dokumen</h2>
          <h6 class="section-subheading text-muted">Membantu anda dalam mengatur dokumen.</h6>
        </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img src="/image/adm1.png" class="card-img-top" style="margin-top: 20px;" alt="..." width="100%" height="100%" >
              <div class="card-body">
              <h5 class="card-title">Dokumen Perjalanan Luar Negeri</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="/admindok1"> <button class="btn btn-outline-warning"> More Info</button></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
              <div class="card mb-4 box-shadow">
            <img src="/image/adm2.png"  class="card-img-top" style="margin-top: 20px;" alt="..." width="100%" height="100%" >
            <div class="card-body">
              <h5 class="card-title">Administrasi Urusan Keluarga</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="admindok.php"> <button class="btn btn-outline-warning"> More Info</button></a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
              <div class="card mb-4 box-shadow">
            <img src="/image/adm3.png"  class="card-img-top" style="margin-top: 20px;" alt="..." width="100%" height="100%" >
            <div class="card-body">
              <h5 class="card-title">Aset Tanah dan Properti</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="admindok.php"> <button class="btn btn-outline-warning"> More Info</button></a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
              <div class="card mb-4 box-shadow">
            <img src="/image/adm4.png"  class="card-img-top" style="margin-top: 20px;" alt="..." width="100%" height="100%" >
            <div class="card-body">
              <h5 class="card-title">Keuangan dan Investasi</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="admindok.php"> <button class="btn btn-outline-warning"> More Info</button></a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
              <div class="card mb-4 box-shadow">
            <img src="/image/adm5.png"  class="card-img-top" style="margin-top: 20px;" alt="..." width="100%" height="100%" >
            <div class="card-body">
              <h5 class="card-title">Digital</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="admindok.php"> <button class="btn btn-outline-warning"> More Info</button></a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img src="/image/adm6.png"  class="card-img-top" style="margin-top: 20px;" alt="..." width="100%" height="100%" >
            <div class="card-body">
              <h5 class="card-title">Bisnis</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="/admindok"> <button class="btn btn-outline-warning"> More Info</button></a>
            </div>
          </div>
        </div>

        </div>
        </div>
      </div>
  </section>

  <!-- Firma Hukum-->
<section id="firmahukum" class="product text-center mt-5">
  <div class="container">
    <h2>Mitra Firma Hukum Kami</h2>
      <div class="row row-cols-auto d-flex justify-content-center align-items-center">
        @foreach ($firma as $item)
        <div class="col-lg-4">
          <div class="card h-100 w-100 border border-0 ">
              <div class="card-body text-center">
                  <img src="{{ asset('gambarfirma/'.$item->gambar ) }}" height="200" width="200" class="rounded-circle d-block mx-auto" alt="...">
                  <h5 class="card-title mt-3">{{ $item->nama_firma }}</h5>
                  <p class="card-text">Phone : {{ $item->phone }}</p>
                  <p class="card-text">Alamat : {{ $item->alamat }}</p>
                  <p class="card-text">Rating : {{ $item->rating }}</p>
              </div>
            </div>
        </div> 
        @endforeach
      </div>
     </div>
  </div>


    <div class="container">
    <h2>Rekomendasi Pengadilan</h2>
      <div class="row row-cols-auto d-flex justify-content-center align-items-center">
        @foreach ($pengadilan as $item)
        <div class="col-lg-4">
          <div class="card h-100 w-100 border border-0 ">
              <div class="card-body text-center">
                  <img src="{{ asset('gambarpengadilan/'.$item->gambar ) }}" height="200" width="200" class="rounded-circle d-block mx-auto" alt="...">
                  <h5 class="card-title mt-3">{{ $item->nama_pengadilan }}</h5>
                  <p class="card-text">Phone : {{ $item->phone }}</p>
                  <p class="card-text">Alamat : {{ $item->alamat }}</p>
                  <p class="card-text">Rating : {{ $item->rating }}</p>
              </div>
            </div>
        </div> 
        @endforeach
      </div>
     </div>
  </div>




</div>
</section>

{{-- About Us --}}

{{-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> --}}
<div id="aboutus"class="about-section gray-bg">
                <div class="container">
                    <div class="row">
						<div >
							<div class="about-title clearfix"><br><br>
								<h2 style="text-align: center">ABOUT <span style="color: #F07D00 ">LEGAL BUDDY</span></h2>
								<p >Legal Buddy merupakan sebuah platform yang didirikan atas kesadaran bahwa pengetahuan dan kesadaran hukum di Indonesia masih tergolong rendah. Legal Buddy ingin membantu masyarakat Indonesia untuk memperoleh bantuan dan informasi terkait hukum secara gratis. Melalui gerakan kecil ini, Legal Buddy berharap dapat meningkatkan nilai sumber daya manusia di Indonesia. </p>
							<div class="about-icons"> 
             
	        </div>
							</div>
						</div>
						<div class="col-md-5 col-sm-6">
							<div class="about-img">
								<img src="https://devitems.com/preview/appmom/img/mobile/2.png" alt="">
							</div>
						</div>	
                    </div>
                </div>
            </div>
</section>

 <!-- Our Team -->
<section class="page-section bg-light" id="team-member">
            <div class="container">
                <div class="row">

                  <div class="text-center">
                    <div class="page-section bg-light">
                        <h2 >OUR<span style="color:#F07D00">   AMAZING</span>  TEAM</h2>
                        {{-- <h3 class="section-subheading text-muted" style="margin-bottom: 30px;" >Lorem ipsum dolor sit amet consectetur.</h3> --}}
                    </div>
                  </div>

                    <div class="col-2 col-md" >
                        <div class="text-center">   
                          <div class="team-member">
                            <img class="mx-auto rounded-circle" width="100px" height="100px" src="imgteam/epan.jpg" alt="..." />
                            <h4>Epantech</h4>
                            <p class="text-muted" >Front-end</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-2 col-md">
                        <div class="text-center">   
                          <div class="team-member">
                            <img class="mx-auto rounded-circle" width="100px" height="100px" src="imgteam/tya.jpg" alt="..." />
                            <h4>Tya</h4>
                            <p class="text-muted">Full Stack</p>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-2 col-md">
                      <div class="text-center">   
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" width="100px" height="100px" src="imgteam/putri.jpg" alt="..." />
                            <h4>Putri</h4>
                            <p class="text-muted">Full Stack</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-2 col-md">
                      <div class="text-center">   
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" width="100px" height="100px" src="imgteam/bram.jpg" alt="..." />
                            <h4>Bismo</h4>
                            <p class="text-muted">Lead Designer</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-2 col-md">
                      <div class="text-center">   
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" width="100px" height="100px" src="imgteam/rey.png" alt="..." />
                            <h4>Ray</h4>
                            <p class="text-muted">Analyst</p>
                            </div>
                      </div>
                    </div>
                   
                </div>
                {{-- <div class="row">
                    <div class="col-md-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div> --}}
            </div>
          </section>


{{-- Contact us --}}
<section id="contact-us">
  <br><br>
  <h2 style="text-align: center">CONTACT<span style="color:#F07D00">   US</span></h2>
  <div style="align: center; padding-left:40%; margin-bottom:20px">
    <a  style="padding-right: 30px; padding-left:30px">
      <img src="/image/fb.png" style="width: 30px">
    </a>
    <a   style="padding-right: 45px; padding-left:15px ">
      <img src="/image/ig.png" style="width: 30px">
    </a>
    <a href="http://wa.me/6281353074137">
      <img src="/image/wa.png" style="width: 30px">
    </a>
  </div>
</section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>