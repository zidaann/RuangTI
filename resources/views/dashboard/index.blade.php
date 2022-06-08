@extends('dashboard.layouts.main')

@section('content')
    <div class="container rounded" style="margin-top:50 px; background-color: #e7ecea; " data-aos="fade-down">
        <div class="row justify-content-center rounded pt-3"  >
        <div class="col-lg-8 " style="padding: 20px 0;" data-aos="zoom-in" data-aos-delay="200">
            <img src="../assets/img/login/login.png" width="200px" alt="" class="d-block img-fluid mx-auto rounded-circle">
            <h3 class="text-center mt-3 fw-bold"> Halo {{ auth()->user()->name }}</h3>
            <h4 class="text-center">Masih bingung mau mulai dari mana? </h4>
        </div>
        </div>
        <div class="row justify-content-center rounded pt-4 pb-5" style=" margin-bottom:90px;">
        <div class="col-lg-8 rounded p-4" style="background-color: rgb(247, 247, 247);" data-aos="zoom-in">
            <h5 class="fw-bold text-center">{{ auth()->user()->name }}, kamu perlu roadmap!</h5>
            <h6 style="color: rgb(124, 124, 124)">Roadmap adalah arahan. Dengan roadmap kita tahu apa yang harus dipelajari terlebih dahulu kemudian sedikit demi sedikit meningkatkan keterampilan yang kita miliki secara terarah. Seseorang yang mempunyai passion tinggi namun tapa arahan, cenderung memiliki kemajuan yang lambat atau bahkan tidak maju sama sekali.</h6>
            <a href="https://www.roadmap.sh" class="btn btn-primary" target="_blank"> Kunjungi</a>
        </div>
        </div>
    </div>
@endsection