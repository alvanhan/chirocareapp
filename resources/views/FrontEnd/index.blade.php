@extends('FrontEnd.layout.main')
@section('content')
<!-- end header -->
<div class="full_bg">
    <!-- header inner -->
    <div class="section">
        <!-- carousel code -->
        <div id="banner1" class=" slide slider_main">
            <div class="carousel-inner">
                <!-- first slide -->
                <div class="carousel-item active">
                    <div class="carousel-caption cuplle">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="photog">
                                        <h1 class="text-danger">Chiro Care</h1>
                                        <h2 class="text-white">Klinik Pelayanan Chiro Terapi adalah pusat kesehatan
                                            yang mengkhususkan diri dalam terapi chiropractic. </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end banner -->
<!-- about -->
<div class="about">
    <div class="container_width">
        <div class="row d_flex">
            <div class="col-md-7">
                <div class="titlepage text_align_left">
                    <h2>TENTANG KAMI</h2>
                    <p>Klinik ini menawarkan perawatan yang berfokus pada penanganan gangguan sistem
                        muskuloskeletal, terutama tulang belakang. Dengan menggunakan teknik manipulasi manual, para
                        profesional di klinik ini berusaha memperbaiki keseimbangan dan fungsi tubuh, meredakan
                        nyeri, dan meningkatkan kualitas hidup pasien.
                    </p>
                </div>
            </div>
            <div class="col-md-5">
            </div>

        </div>
    </div>
</div>

<!-- protect -->
<div class="protect">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>LAYANAN KAMI</h2>
                    <p>Klinik Pelayanan Chiro Terapi menyediakan layanan yang holistik, menggabungkan metode
                        tradisional dan modern untuk memberikan perawatan yang efektif dan aman bagi pasien dari
                        berbagai usia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end protect -->
<!-- cases -->
<div class="cases">
    <div class="container-fluid">
        <div class="row d_flex">
            <div class="col-md-4">
                <div class="latest text_align_center">
                    <div class="nostrud">
                        <h3>Penanganan Nyeri Tulang Belakang</h3>
                        <p>Chiropractic care menawarkan solusi efektif untuk nyeri tulang belakang dengan teknik
                            manipulasi yang aman dan alami, membantu memulihkan fungsi tulang belakang dan
                            meningkatkan kualitas hidup.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest text_align_center">
                    <div class="nostrud">
                        <h3>Perbaikan Postur Tubuh</h3>
                        <p>Perawatan chiropractic dapat membantu memperbaiki postur tubuh yang buruk, mengurangi
                            tekanan pada tulang belakang, dan mencegah masalah kesehatan jangka panjang.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest text_align_center">
                    <div class="nostrud">
                        <h3>Manajemen Cedera Olahraga</h3>
                        <p>Chiropractic care efektif dalam menangani cedera olahraga, mempercepat pemulihan,
                            mengurangi nyeri, dan meningkatkan performa atlet melalui penanganan yang tepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end cases -->
<br>
@include('FrontEnd.layout.footer')
@endsection

@section('javascript')
@endsection
