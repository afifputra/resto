@extends('layouts.main')

@section('container')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/Opening.webm" type="video/webm" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>BUKA PUKUL 11.00 - 20.00 WIB</h6>
                <h2>Gubug Sambel Rawit <em>Pedese Wani!!!</em></h2>
                <div class="main-button">
                    <a href="/reservasi">Reservasi</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Promo <em>Acara</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Fasilitas ruangan untuk mengadakan acara-acara khusus dengan kapasitas hingga 8 orang.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/" width="600" height="300" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis, possimus illum
                                    voluptatibus delectus veniam.</sup>
                            </span>
                            <h4>JUDUL</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, vel.</p>
                            <ul class="social-icons">
                                <li><a href="#">+ Reservasi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="main-button text-center">
                <a href="/menu">Lihat Menu</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" width="1920px" height="700px"
        style="background-image: url(assets/images/bg1.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Tentang <em>Kami</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Gubug Sambel Rawit</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Resto Gubug Sambel Rawit Purwokerto adalah resto yang berada di daerah kampus yaitu Universitas
                            Jendral Soedirman (UNSOED), dibuka oleh Andi Suwignyo pada 02 Februari 2020. Resto ini merupakan
                            salah satu resto yang menyajikan berbagai jenis makanan khas Indonesia dengan berbagai varian
                            sambel sebagai menu andalan.</p>
                        <p>Resto Gubug Sambel Rawit Purwokerto berada di Jalan Ringin Tirto, Gang Himalaya No. 12, Kelurahan
                            Bancarkembar, Kecamatan Purwokerto Utara.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action"
        style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Beri Kami <em>Saran</em></h2>
                        <p>Silahkan kirim kami kritik dan saran Anda terhadap pelayanan kami melalui kontak di bawah ini
                            untuk meningkatkan kualitas pelayanan kami. Terimakasih dan datang kembali ya!</p>
                        <div class="main-button">
                            <a href="/contact">Kontak Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Testimoni <em>Pembeli</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Berikut merupakan testimoni dari para pembeli mengenai resto dan pelayanan kami.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card-deck" style="width: 71rem">
                        <div class="card ">
                            <img class="card-img-top"
                                style="margin-left: 1px; margin-top: 2px; width: 245px;height: 245px; overflow: hidden; border-radius: 50%;"
                                src="assets/images/Testimoni1.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">DENI SITRIADI</p>
                                <p class="card-text">"Nasi liwetnya gada obat, mantaps mantaps."</p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                style="margin-left: 1px; margin-top: 2px; width: 245px;height: 245px; overflow: hidden; border-radius: 50%;"
                                src="assets/images/Testimoni2.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">REVA VIA</p>
                                <p class="card-text">"Mantul mendoan bakarnya."</p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                style="margin-left: 1px; margin-top: 2px; width: 245px;height: 245px; overflow: hidden; border-radius: 50%;"
                                src="assets/images/Testimoni3.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">DEA ANGELA</p>
                                <p class="card-text">"Ada manisnya, ada asinnya, ada pedesnya, pokoknya enak enak
                                    banget guys."</p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                style="margin-left: 1px; margin-top: 2px; width: 245px;height: 245px; overflow: hidden; border-radius: 50%;"
                                src="assets/images/Testimoni4.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">VYNA MONICCA</p>
                                <p class="card-text">"Bebeknya empuk banget sih, sambelnya pedes gurih gitu, enak lho
                                    ini!"</p>
                            </div>
                        </div><br>
                    </div>
                </div>
            </div>
            <div class="main-button text-center" style="margin-top: 10px;">
                <a href="/testimoni">Lainnya >></a>
            </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->
@endsection
