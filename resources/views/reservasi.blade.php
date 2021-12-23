@extends('layouts.main')

@section('container')

    {{-- Awal --}}
    <section class="section section-bg" id="call-to-action"
        style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Pemesanan <em> Meja</em></h2>
                        <p>Silahkan isi formulir pemesanan di bawah ini, lakukan pembayaran sesuai harga yang tertera dengan
                            transfer melalui rekening bank yang tersedia, kemudian upload bukti transfer dan klik reservasi.
                            Bukti reservasi akan dikirim melalui email sebagai tanda telah melakukan reservasi meja.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FORM --}}
    <section class="section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form id="formReservasi" action="" method="post" enctype="multipart/form-data">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <label for="nama">Nama</label>
                                        <input name="nama" type="text" id="nama" placeholder="Nama" required>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <label for="tanggal">Tanggal</label>
                                        <input name="tglreservasi" type="date" id="tglreservasi" required>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <label for="jamMasuk">Jam Masuk</label>
                                        <input name="jamMasuk" type="time" id="jamMasuk" min="12:00" max="18:00"
                                            placeholder="Time" required>
                                        <span class="validity"></span>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <label class>Jam Keluar</label>
                                        <input name="jamKeluar" type="time" id="jamKeluar" required>
                                        {{-- <input name="selisih" type="selisih" id="time" placeholder="Time"> --}}
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <label for="email">Email</label>
                                        <input name="email" type="email" id="email" placeholder="Email*" required>
                                    </fieldset>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <label for="telpCustomer">Nomor Telepon (WA)</label>
                                        <input name="telpCustomer" type="text" id="telpCustomer" placeholder="No. Telp"
                                            required>
                                    </fieldset>
                                </div>


                                <div class="col-lg-12">
                                    <fieldset>
                                        <label for="alamat">Alamat</label>
                                        <input name="alamat" id="alamat" placeholder="Alamat" required>
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <label for="catatan">Catatan</label>
                                        <textarea name="catatan" id="catatan" placeholder="Catatan" required></textarea>
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <button name="submit" type="submit" class="btn btl-lg btn-primary">Pesan</button>
                                    </fieldset>
                                </div>
                            </div>
                            
                        </div>
                        {{-- <fieldset>Pilih Meja : <br>
                            <i data-toggle="tooltip" title="A untuk 2 orang, B untuk 4 orang, C untuk 8 orang"></i> --}}
                        {{-- <div class="input-group mb-3">
                                <div>
                                    <label for="buktiTransfer">Upload Bukti Transfer</label>
                                    <input type="file" name="buktiTransfer" id="buktiTransfer">
                                </div>
                            </div> --}}
                        
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="tabs-content">
                        <label>Rekening Pembayaran</label>
                        <p><a href="#">220401003608508 / A.N. Reubens Joshuadinata</a></p>

                        <label>Instagram</label>
                        <p><a href="https://www.instagram.com/gubug_sambelrawit/">@gubug_sambelrawit</a></p>

                        <label>Whatsapp</label>
                        <p><a href="#">0811-2916-977</a></p>

                        <label>Alamat</label>
                        <p><a href="#">Jl. Ringin Tirto KV.27/28, Bancarkembar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
