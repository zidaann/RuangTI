@extends('layouts.main')

@section('content')
    <section id="jumbotron" class="jumbotron d-flex align-items-center jumbotron" style="margin-top: -90px;">
        <div class="container">
        <div class="row" >
            <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Belajar IT Lebih Mudah, Untuk Membangun Karirmu Sebagai Profesional Handal</h1>
            <p data-aos="fade-up" data-aos-delay="400" class="mt-3">Mulai belajar dengan mudah dan terarah dengan e-book yang lengkap dan kursus yang terpercaya</p>
            <div data-aos="fade-up" data-aos-delay="600">
                <div class="text-center text-lg-start">
                <a href="/login" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Join Now</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-6 jumbotron-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/landingpage/hero.png" class="img-fluid " >
            </div>
        </div>
        </div>
        </section><!-- End Jumbotron -->
    
        <!-- ======= Reason Section ======= -->
        <section id="reason" class="reason">
        <div class="container" data-aos="fade-up">
            <div class="row feature-icons" data-aos="fade-up">
            <header class="section-header">
                <h2 class="text-center fw-bold">Alasan Memilih Ruang TI</h1>
            </header>
            <div class="row">
                <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                <img src="assets/img/landingpage/reason.png" class="img-fluid p-4">
                </div>
                <div class="col-xl-8 d-flex content py-4 ">
                <div class="row align-self-center gy-4">
                    <div class="col-lg-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-graph-up"></i>
                    <div>
                        <h4>Platform belajar online coding dan desain paling mudah</h4>
                    </div>
                    </div>
    
                    <div class="col-lg-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-book"></i>
                    <div>
                        <h4>Menyediakan banyak ebook untuk belajar, yang dapat diunduh secara gratis</h4>
                    </div>
                    </div>
    
                    <div class="col-lg-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-command"></i>
                    <div>
                        <h4>Terdapat banyak pilihan course</h4>
                    </div>
                    </div>
    
                    <div class="col-lg-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <i class="ri-radar-line"></i>
                    <div>
                        <h4>Memberikan kemudahan dengan tampilan user friendly</h4>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section><!-- End Reason Section -->
    
        <!-- ======= Course Section ======= -->
        <section id="courses" class="courses mt-4" >
            <div class="container" data-aos="fade-up">
            <header class="section-header">
                <!-- <h5 class="mt-4" style="color: #012970;" >Pilih kelas sesuai karirmu</h5> -->
                <h2 class="text-center fw-bold">Kelas</h2>
                <p style="font-size:20px;" class="fw-normal text-center">Pilih kelas sesuai kebutuhanmu</p>
            </header>
    
            <div class="row mt-3">
                <div class="col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="200" data-tilt>
                <div class="service-box blue">
                    <i class="bi bi-code-slash icon"></i>
                    <h3>Kelas Koding</h3>
                    <a href="/login" class="read-more"><span>Kunjungi</span> <i class="bi bi-arrow-right"></i></a>
                </div>
                </div>
    
                <div class="col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="200" data-tilt >
                <div class="service-box orange ">
                    <i class="bi bi-palette icon"></i>
                    <h3>Kelas Desain</h3>
                    <a href="/login" class="read-more"><span>Kunjungi</span> <i class="bi bi-arrow-right"></i></a>
                </div>
                </div>
            </div>
        </section>
        <!-- End Course Section -->
    
        <!-- ======= Event Section ======= -->
        <section id="event" class="event">
            <div class="container" data-aos="fade-up">
            <div class="row gx-0 " style="margin-top:50px; margin-bottom: 50px;">
                <div class="col-lg-6 d-flex flex-column " data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3>Ikuti Berbagai Macam Event di Ruang TI !!</h3>
                    <h2>Event</h2>
                    <p>
                    Lebih banyak event yang dapat dijangkau dengan mudah untuk mendapatkan ilmu serta pengetahuan kamu seputar pemrograman
                    </p>
                    <div class="text-center text-lg-start">
                    <a href="/events" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Read More</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                </div>
    
                <div class="col-lg-6 d-flex justify-content-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/landingpage/event.jpg" class="img-fluid" style="width: 55vh;">
                </div>
    
            </div>
            </div>
    
        </section><!-- End Event Section -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection
