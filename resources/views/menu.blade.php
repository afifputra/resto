@extends('layouts.main')

@section('container')

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action"
        style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Menu <em>Kami</em></h2>
                        <p>Tersedia menu paketan dan </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/banner-image-1-1920x500.jpg" width="720" height="217" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Tanpa Nasi dan Sambel</sup>
                            </span>
                            <h4>Tes</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum minima quidem, facilis,
                                tempore, perferendis natus voluptates et cupiditate eos sint cum tempora magnam numquam
                                quaerat nam temporibus veniam? Dolor consequuntur fugit veniam corporis tempora repellendus
                                amet! Vel quam maiores voluptatibus voluptatem ipsa natus obcaecati deleniti saepe,
                                asperiores, ducimus cumque incidunt, ipsam magnam assumenda libero numquam maxime beatae.
                                Quaerat expedita incidunt enim tempore delectus, minima cumque tenetur quo odit nesciunt
                                nisi architecto vel fugit repudiandae, sequi, in aliquid. Magni, voluptates! Perspiciatis.
                            </p>
                            <ul class="social-icons">
                                <p>+ Nasi Putih/Liwet Rp 4000 - Rp 5.500</p>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <nav>
                    <ul class="pagination pagination-lg justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav> --}}
            </div>
    </section>

@endsection
