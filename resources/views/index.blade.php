@extends('layouts.app')
@section('title', 'Durent | Hubungi Kami')
@section('content')

    <!-- Banners -->
    <section id="banner" class="banner-section">
        <div class="container">
            <div class="div_zindex">
                <div class="row">
                    <div class="col-xs-5 col-md-push-7">
                        <div class="banner_content">
                            <h1>Cari Kamera untuk kenyamanan anda.</h1>
                            <p>Kami Punya beberapa pilihan untuk anda. </p>
                            <a href="{{ route('daftarequipment') }}" class="btn">Selengkapnya <span class="angle_arrow"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banners -->



    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">


                <div class="recent-tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="" role="tab" data-toggle="tab">Equipment
                                Untuk Anda</a></li>
                    </ul>
                </div>



                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="">

                        @foreach ($equipment as $tampil)
                            <div class="col-list-3">
                                <div class="recent-car-list">
                                    <div class="car-info-box"> <a href="/detailequipment/{{ $tampil->id_equipment }}"><img
                                                src="{{ route('foto', ['filename' => $tampil->image1]) }}"
                                                class="img-responsive" alt="image"></a>
                                        <ul>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $tampil->tahun }}</li>
                                            <li><i class="fa fa-camera" aria-hidden="true"></i>{{ $tampil->jumlah }} Jumlah
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="equipment-title-m">
                                        <h6><a href="/detailequipment/{{ $tampil->id_equipment }}">{{ $tampil->nama_kategori }},
                                                {{ $tampil->nama_equipment }}</a></h6>
                                        <span class="price">@currency($tampil->harga) /Hari</span>
                                    </div>

                                    <div class="inventory_info_m">
                                        <p>{{ $tampil->deskripsi }}</p>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>


@endsection
