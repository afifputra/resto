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
                        <h2>Jangan Ragu Untuk <em>Menghubungi Kami</em></h2>
                        <p>Kritik dan saran Anda sangat berguna dalam meningkatkan kualitas hidangan dan pelayanan kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>info <em> kontak</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-whatsapp"></i>
                    </div>
                    <h5>0811-2916-977</h5>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-instagram"></i>
                    </div>
                    <h5>@gubug_sambelrawit</h5>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h5>Jl. Ringin Tirto KV.27/28, Bancarkembar</h5>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5033303446535!2d109.23931731477572!3d-7.409409094654071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655f1e1c97c507%3A0x68e2ddae564b99c6!2sGubug%20Sambel%20Rawit!5e0!3m2!1sen!2sid!4v1632418322448!5m2!1sen!2sid"
                            width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form section-bg" style="background-image: url(assets/images/contact-1-720x480.jpg)">
                        <form id="contact" action="" method="post">
                            <h6 class="text-center mb-3">Kritik dan Saran</h6>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Nama*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Email*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Subyek">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Pesan"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Kirim Pesan</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

@endsection
