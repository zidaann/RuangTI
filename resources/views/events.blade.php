@extends('layouts.main')

@section('content')

<!-- ======= Jumbotron Section ======= -->
<section id="jumbotron" class="paralax-events d-flex align-items-center jumbotron" style="margin-top: -90px;">
    <div class="container">
      <div class="row" >
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Dapatkan Wawasan & Pengalaman Seputar Pemrograman melalui Event di Ruang TI</h1>
          <p data-aos="fade-up" data-aos-delay="400">Ikuti Beragam Event yang Disediakan oleh Ruang TI untuk menambah ilmu serta pengetahuan kamu.</p>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/event/jumbotron.png" class="img-fluid" >
        </div>
      </div>
    </div>
</section>
<!-- End Jumbotron -->

<!-- ======= Event Section ======= -->
<section id="events" class="events">

    <div class="container" data-aos="fade-up">

      <header class="section-header pt-5 mt-5">
        <h2>Ikuti Berbagai Event di Ruang TI</h2>
      </header>

      <div class="container" data-aos="fade-up">
        <h4 class="pb-3 mb-3"><strong>Event Webinar</strong></h4>
        <div class="row">

          <div class="col-lg-4 mb-3">
            <div class="card">
              <img src="assets/img/event/webinar/w1.png" class="img-fluid" >
              <div class="card-body">
                <h5 class="card-title"><a href="/events/event-1">ML Study Jam : Supervised & Unsupervised Learning Hands On</a></h5>
                <p class="card-text">ML Study Jam adalah rangkaian belajar machine learning, yang menjadi 4 part dan membahas dari level entry hingga intermediate.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card">
              <img src="assets/img/event/webinar/w2.png" class="img-fluid" >
              <div class="card-body">               
                <h5 class="card-title"><a href="/events/event-2">Webinar UI/UX Design For Mobile & Web Development</a></h5>
                <p class="card-text">
                  Yuk kembangin lagi kemampuan design UI/UX untuk mobile dan web development. Kita mau adain webinar UI/UX nih!
                  </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card">
              <img src="assets/img/event/webinar/w3.png" class="img-fluid" >
              <div class="card-body">
                <h5 class="card-title"><a href="#">Dicoding Developer : Flutter | Kenali Widget ListView dan GridView...</a></h5>
                <p class="card-text">Webinar kali ini akan membahas materi/maupun pertanyaan seputar kelas Belajar Membuat Aplikasi Flutter untuk Pemula</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card">
              <img src="assets/img/event/webinar/w4.png" class="img-fluid" >
              <div class="card-body">
                <h5 class="card-title"><a href="#">Business Talk: Design Thinking To Build A Successfull Start Up</a></h5>
                <p class="card-text">Business Talk ini membahas mengenai seluk-beluk design thinking untuk membangun start up yang sukses!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card">
              <img src="assets/img/event/webinar/w5.png" class="img-fluid" >
              <div class="card-body">        
                <h5 class="card-title"><a href="#">Indosat Ooredoo Hutchison Digital Camp : Digital Summit 2022</a></h5>
                <p class="card-text">Strengthening Indonesia's Digital Ecosystem : Strategies and Opportunieties. Graduation Class of 2021 & IDCamp 2022 Launching Event.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card">
              <img src="assets/img/event/webinar/w6.png" class="img-fluid" >
              <div class="card-body">
                <h5 class="card-title"><a href="#">Fundamental Understanding & The Difference..</a> </h5>
                <p class="card-text">Introduction to UI/UX Designer and how to become one without related backgrounds. By Areta Selena Khrista</p>
              </div>
            </div>
          </div>
          
          <div class="row mt-5" >
          <h4 class="pb-3 mb-3"><strong>Event Kompetisi</strong></h4>
          
            <div class="col-lg-4 mb-3">
              <div class="card">
                <img src="assets/img/event/kompetisi/k1.png" class="img-fluid" >
                <div class="card-body">
                  <h5 class="card-title"><a href="#">GAYATAMA 3 - Web Design : Building The Future of Digital Technology</a> </h5>
                  <p class="card-text">Gayatama 3 adalah gelar karya & prestasi mahasiswa ke-3 yang diadakan tiap tahunnya.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card">
                <img src="assets/img/event/kompetisi/k2.png" class="img-fluid" >
                <div class="card-body">
                  <h5 class="card-title"><a href="#">Code Jam X Progate : Algorithm Battlefield</a> </h5>
                  <p class="card-text">Algorithm Battlefield adalah event coding battle yang diadakan oleh HIMTI Unesa.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card">
                <img src="assets/img/event/kompetisi/k3.png" class="img-fluid" >
                <div class="card-body">
                  <h5 class="card-title"><a href="#">ITECHNO CUP 2022 - METAVERSE : Web Design Competition</a> </h5>
                  <p class="card-text">Kompetisi di bidang TIK tingkat Nasional yang diselenggarakan oleh Politeknik Negeri Jakarta</p>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>

  </section>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- End Event Section -->
@endsection