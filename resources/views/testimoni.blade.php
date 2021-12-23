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
                        <h2>Read our <em>Testimonials</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row">
                <!-- <div class="col-md-6"> -->
                <!-- <div class="card-deck"> -->
                <div class="card" style="width: 17rem; margin-right: 6px; margin-bottom: 10px;">
                    <img class="card-img-top"
                        style="margin-left: auto; margin-right: auto; margin-top: 2px; width: 245px;height: 245px; overflow: hidden; border-radius: 50%;"
                        src="assets/images/Testimoni1.PNG" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-danger" style="font-weight: bold;">Lorem ipsum dolor sit amet.</p>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat fugit sit asperiores minima, nemo dolor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->

@endsection
