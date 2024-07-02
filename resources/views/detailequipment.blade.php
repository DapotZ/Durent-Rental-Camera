@extends('layouts.app')
@section('title', 'Durent | Hubungi Kami')
@section('content')

    <section id="listing_img_slider">
        <div><img src="{{ route('foto', ['filename' => $equipment->image1]) }}" class="img-responsive" alt="image"
                width="900" height="560"></div>
        <div><img src="{{ route('foto', ['filename' => $equipment->image2]) }}" class="img-responsive" alt="image"
                width="900" height="560"></div>
        <div><img src="{{ route('foto', ['filename' => $equipment->image3]) }}" class="img-responsive" alt="image"
                width="900" height="560"></div>
        <div><img src="{{ route('foto', ['filename' => $equipment->image4]) }}" class="img-responsive" alt="image"
                width="900" height="560"></div>
        <div><img src="{{ route('foto', ['filename' => $equipment->image5]) }}" class="img-responsive" alt="image"
                width="900" height="560"></div>
    </section>
    <!--/Listing-Image-Slider-->

    <!--Listing-detail-->
    <section class="listing-detail">
        <div class="container">
            <div class="listing_detail_head row">
                <div class="col-md-9">
                    <h2>{{ $equipment->nama_kategori }}, {{ $equipment->nama_equipment }}</h2>
                </div>
                <div class="col-md-3">
                    <div class="price_info">
                        <p>@currency($equipment->harga)</p>/ Hari
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="main_features">
                        <ul>

                            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
                                <h5>{{ $equipment->tahun }}</h5>
                                <p>Tahun Input</p>
                            </li>
                            <li> <i class="fa fa-camera" aria-hidden="true"></i>
                                <h5>{{ $equipment->jumlah }}</h5>
                                <p>Jumlah</p>
                            </li>
                        </ul>
                    </div>
                    <div class="listing_more_info">
                        <div class="listing_detail_wrap">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs gray-bg" role="tablist">
                                <li role="presentation" class="active"><a href="#vehicle-overview "
                                        aria-controls="vehicle-overview" role="tab" data-toggle="tab">Deskripisi
                                        Equipment</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- vehicle-overview -->
                                <div role="tabpanel" class="tab-pane active" id="vehicle-overview">

                                    <p>{{ $equipment->deskripsi }}</p>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <!--Side-Bar-->
                <aside class="col-md-3">

                    <div class="share_vehicle">
                        <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a
                                href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a
                                href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a
                                href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
                    </div>
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Sewa Sekarang</h5>
                        </div>
                        @guest
                            <form method="get" action="">
                                <input type="hidden" class="form-control" name="vid" value=39 required>
                                <div class="form-group" align="center">
                                    <a href="#myModal" class="btn btn-xs uppercase" data-toggle="modal"
                                        data-dismiss="modal">Login Untuk Menyewa</a>
                                </div>
                            </form>
                        @endguest
                        @auth
                            <form method="get" action="">
                                <input type="hidden" class="form-control" name="vid" value=39 required>
                                <div class="form-group" align="center">
                                    <button class="btn" class=" align="center"
                                        onclick="window.open('https://api.whatsapp.com/send?phone=6289677232267&text=Halo! Tekan pesan ini untuk melakukan pemesanan lebih lanjut. Mohon isi data lengkap dibawah ini:%0A%0A*[{{ $kategori->nama_kategori }} - {{ $equipment->nama_equipment }}]*%0ANama:%0AAlamat:%0AWaktu Peminjaman:%0AHarga/Hari: @currency($equipment->harga)%0APembayaran:%0AJasa Pengiriman:')"><i
                                            class="fa fa-whatsapp" aria-hidden="true" style="margin-right:7px;"></i>Sewa
                                        Sekarang</button>
                                </div>
                            </form>
                        @endauth

                    </div>
                </aside>
                <!--/Side-Bar-->
            </div>

            <div class="space-20"></div>
            <div class="divider"></div>

        </div>
    </section>
@endsection
