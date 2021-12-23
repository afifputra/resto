@extends('layouts.main')

@section('container')

    <section class="section section-bg" id="call-to-action"
        style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Informasi Tentang <em>Resto Kami</em></h2>
                        <p>Untuk teman-teman yang ingin mengetahui tentang resto kami bisa dilihat di bawah ini!!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'><i class="fa fa-building"></i> Profil Kami</a></li>
                        <li><a href='#tabs-2'><i class="fa fa-soccer-ball-o"></i> Visi & Misi</a></a></li>
                        <li><a href='#tabs-3'><i class="fa fa-heart"></i> Fasilitas</a></a></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="assets/images/profil.png" width="940" height="400" alt="">
                            <h4>Profil Kami</h4>
                            <p>Resto Gubug Sambel Rawit Purwokerto adalah resto yang berada di daerah kampus yaitu
                                Universitas Jendral Soedirman (UNSOED), dibuka oleh Andi Suwignyo pada 02 Februari 2020.
                                Resto tersebut merupakan salah satu resto yang menyajikan berbagai jenis makanan khas
                                Indonesia dengan berbagai varian sambel sebagai menu andalannya.</p>
                            <img src="assets/images/profil2.png" alt="" style="margin-bottom: 25px;">
                            <p>Resto Gubug Sambel Rawit Purwokerto merupakan resto yang berada di Jalan Ringin Tirto, Gang
                                Himalaya No. 12, Kelurahan Bancarkembar, Kecamatan Purwokerto Utara. Resto ini merupakan
                                salah satu resto yang memiliki menu andalan berupa aneka sambel yang pedas dan masakan khas
                                Indonesia.</p>
                            <img src="assets/images/profil3.jpeg" alt="">
                        </article>
                        <article id='tabs-2'>
                            <img src="assets/images/about-image-2-940x460.jpg" width="940" height="400" alt="">
                            <h4>Visi & Misi</h4>
                            <p>Visi : <br>
                                “Pedese Wani!”, yang berarti ”pedasnya berani!”, dimana Resto Gubug Sambel Rawit Purwokerto
                                menyajikan makanan dan minuman dengan aneka sambel yang pedas dan enak sebagai menu andalan.
                            </p>
                            <p>Misi : <br>
                                &bull; Memberikan kepuasan terhadap pelanggan.<br>
                                &bull; Mengutamakan kualitas dalam hal apapun yang dilakukan.<br>
                                &bull; Mengembangkan inovasi – inovasi baik dalam produk maupun pelayanan.<br>
                                &bull; Menyajikan hidangan yang enak dan pedas.
                            </p>
                        </article>
                        <article id='tabs-3'>
                            <h4>Fasilitas</h4>
                            <p>Gubug Sambel Rawit juga menyediakan beberapa fasilitas yang dapat digunakan seperti:<br>
                                &bull; Alunan Musik Sunda<br>
                                &bull; Wifi<br>
                                &bull; Toilet<br>
                                &bull; Mushola<br>
                                &bull; Lesehan<br>
                                &bull; Ruang Meeting<br>
                                &bull; Parkir Luas</p>
                            {{-- <img src="assets/images/fasilitas1.png" alt=""> --}}
                            <img src="assets/images/fasilitas2.jpeg" alt="">
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

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
                            <a href="contact.html">Kontak Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

@endsection
