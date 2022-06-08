@extends('layouts.main')

@section('content')
<section class="paralax-about ">
    <div class="container">
        <div class="row justify-content-center" style=" margin-bottom: 130px; margin-top:160px;">
            <h3 class="text-center fw-bold">
            Tentang Ruang TI
            </h3>
            <div class="col-md-8 mt-4 text-center">    
                <p class="fw-semibold" >Ruang TI merupakan platform pendidikan IT yang membantu dalam menciptakan generasi emas di bidang teknologi di Indonesia. Ruang TI menyediakan konten pelajaran digital skills yang dapat diakses dengan mudah dimanapun dan kapanpun.</p>
            </div>
        </div>
    </div>
</section>

    <section id="team" class="team " >
        <div class="container">
            <header class="section-header">
                <h2>Team</h2>
                <p>Our hard working team</p>
            </header>
            <div class="row gy-4" style="margin-bottom: 100px;">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/yul.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Yulia Adiba</h4>
                            <p>
                                NIM   : 20051214005 <br>
                                Kelas : Sistem Informasi 2020A
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/nif.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Hanifatul Fa'iqoh</h4>
                            {{-- <span>Front-End Web Developer</span> --}}
                            <p>
                                NIM   : 20051214015 <br>
                                Kelas : Sistem Informasi 2020A
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/dan.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Ahmad Jourji Zaidan</h4>
                            <p>
                                NIM   : 20051214023 <br>
                                Kelas : Sistem Informasi 2020A
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/ris.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                        <h4>Amrullah Rahman Farisi</h4>
                        <p>
                            NIM   : 20051214043 <br>
                            Kelas : Sistem Informasi 2020A
                        </p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @endsection
