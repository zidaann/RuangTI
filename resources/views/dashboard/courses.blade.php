@extends('dashboard.layouts.main')

@section('content')

<!-- ======= Jumbotron Section ======= -->
<section id="jumbotron" class="courses d-flex align-items-center jumbotron">
    <div class="container">
      <div class="row " >
        <div class="col-lg-6 d-flex flex-column justify-content-center " style="margin-top: -190px;">
          <h1 data-aos="fade-up">Pilih Kelas untuk Meningkatkan Keahlianmu</h1>
          <p data-aos="fade-up" data-aos-delay="400">Pilih kelas sesuai keinginanmu agar belajar berjalan mudah dan terarah.</p>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#course1" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Pemrograman</span>
              </a>
              <a href="#course2" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Desain</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200" style="margin-top: -130px ;">
          <img src="../assets/img/course/jumbotron.png" class="img-fluid" >
        </div>
      </div>
    </div>
  </section>
<!-- End Jumbotron -->

<!-- ======= Courses1 ======= -->
<div class="container" data-aos="fade-up">

  <header class="section-header pt-5 mt-5">
    <p>Pilih Kelas Sesuai Keinginanmu</p>
  </header>
</div>

<section id="course1" class="course1">

<div class="container" data-aos="fade-up">
  <h4 class="pb-3 mb-3"><strong>Kelas Pemrograman </strong></h4>
  
  <div class="row ">

    <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
      <div class="card">
        <img src="../assets/img/course/coding/php.png" class="card-img-top img-fluid" >
        <div class="card-body border-top">
          <h5 class="card-title text-dark fw-bold">PHP</h5>
          <h6 class="card-text text-dark">Pada kelas ini, kita akan mempelajari pemrograman server-side yang ditambahkan ke dalam HTML.</h6>
           <div class="d-grid gap-2 mt-3">
            <a href="#" class="btn btn-primary">Pelajari</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
      <div class="card">
        <img src="../assets/img/course/coding/js.png" class="card-img-top img-fluid" >
        <div class="card-body border-top">
          <h5 class="card-title text-dark fw-bold">JavaScript</h5>
          <h6 class="card-text text-dark">Di kelas ini kita akan belajar bagaimana membuat sebuah website menjadi lebih interaktif dengan...</h6>
          <div class="d-grid gap-2 mt-3">
            <a href="#" class="btn btn-primary">Pelajari</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
      <div class="card">
        <img src="../assets/img/course/coding/html.png" class="card-img-top img-fluid" >
        <div class="card-body border-top">
          <h5 class="card-title text-dark fw-bold">HTML</h5>
          <h6 class="card-text text-dark">Di kelas ini, kita akan belajar bagaimana membuat sebuah website dari awal dengan menggunakan...</h6>
          <div class="d-grid gap-2 mt-3">
            <a href="/courses/html" class="btn btn-primary">Pelajari</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
      <div class="card">
        <img src="../assets/img/course/coding/python.png" class="card-img-top img-fluid" >
        <div class="card-body border-top">
          <h5 class="card-title text-dark fw-bold">Python</h5>
          <h6 class="card-text text-dark">Pada kelas ini kamu akan mempelajari dasar dari Python 3 yang merupakan versi terbaru...</h6>
          <div class="d-grid gap-2 mt-3">
            <a href="#" class="btn btn-primary">Pelajari</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
      <div class="card">
        <img src="../assets/img/course/coding/css.png" class="card-img-top img-fluid" >
        <div class="card-body border-top">
          <h5 class="card-title text-dark fw-bold">CSS</h5>
          <h6 class="card-text text-dark">Di kelas ini kita akan belajar bagaimana cara memberikan style pada setiap element di website...</h6>
          <div class="d-grid gap-2 mt-3">
            <a href="#" class="btn btn-primary">Pelajari</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
      <div class="card">
        <img src="../assets/img/course/coding/csharp.png" class="card-img-top img-fluid" >
        <div class="card-body border-top">
          <h5 class="card-title text-dark fw-bold">C Sharp</h5>
          <h6 class="card-text text-dark">Pada kelas ini, kamu akan mempelajari bahasa pemrograman sederhana yang digunakan untuk...</h6>
          <div class="d-grid gap-2 mt-3">
            <a href="#" class="btn btn-primary">Pelajari</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- End Courses1 -->

<!-- ======= Courses2 ======= -->
<section id="course2" class="course2" style="margin-bottom: 60px;">

  <div class="container" data-aos="fade-up">

    <h4 class="pb-3 mb-3"><strong>Kelas Desain</strong></h4>
    
    <div class="row ">

      <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="card">
          <img src="../assets/img/course/desain/figma.png" class="card-img-top img-fluid" >
          <div class="card-body border-top">
            <h5 class="card-title text-dark fw-bold">Figma</h5>
            <h6 class="card-text text-dark">Figma adalah aplikasi desain berbasis cloud dan alat prototyping untuk project digital.</h6>
             <div class="d-grid gap-2 mt-3">
              <a href="/courses/figma" class="btn btn-primary">Pelajari</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="card">
          <img src="../assets/img/course/desain/xd.png" class="card-img-top img-fluid" >
          <div class="card-body border-top">
            <h5 class="card-title text-dark fw-bold">Adobe XD</h5>
            <h6 class="card-text text-dark">Adobe XD adalah alat desain pengalaman pengguna berbasis vektor untuk aplikasi web dan...</h6>
            <div class="d-grid gap-2 mt-3">
              <a href="#" class="btn btn-primary">Pelajari</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="card">
          <img src="../assets/img/course/desain/canva.png" class="card-img-top img-fluid" >
          <div class="card-body border-top">
            <h5 class="card-title text-dark fw-bold">Canva</h5>
            <h6 class="card-text text-dark">Canva adalah aplikasi desain grafis yang digunakan untuk membuat grafis media sosial, presentasi...</h6>
            <div class="d-grid gap-2 mt-3">
              <a href="#" class="btn btn-primary">Pelajari</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="card">
          <img src="../assets/img/course/desain/coreldraw.png" class="card-img-top img-fluid" >
          <div class="card-body border-top">
            <h5 class="card-title text-dark fw-bold">CorelDRAW</h5>
            <h6 class="card-text text-dark">CorelDraw adalah editor grafik vektor yang dikembangkan oleh Corel, sebuah perusahaan perangkat lunak...</h6>
            <div class="d-grid gap-2 mt-3">
              <a href="#" class="btn btn-primary">Pelajari</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="card">
          <img src="../assets/img/course/desain/ps.png" class="card-img-top img-fluid" >
          <div class="card-body border-top">
            <h5 class="card-title text-dark fw-bold">Adobe Photoshop</h5>
            <h6 class="card-text text-dark">Adobe Photoshop adalah perangkat lunak editor yang dikhususkan untuk pengeditan foto/gambar...</h6>
            <div class="d-grid gap-2 mt-3">
              <a href="#" class="btn btn-primary">Pelajari</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="card">
          <img src="../assets/img/course/desain/ai.png" class="card-img-top img-fluid" >
          <div class="card-body border-top">
            <h5 class="card-title text-dark fw-bold">Adobe Illustrator</h5>
            <h6 class="card-text text-dark">Adobe Illustrator adalah program editor grafis vektor terkemuka, dikembangkan dan dipasarkan oleh...</h6>
            <div class="d-grid gap-2 mt-3">
              <a href="#" class="btn btn-primary">Pelajari</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Course2 -->

@endsection