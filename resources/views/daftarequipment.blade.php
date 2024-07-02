@extends('layouts.app')
@section('title', 'Durent | Hubungi Kami')
@section('content')

    <section class="page-header listing_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Daftar Equipment</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Daftar Equipment</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->

    <!--Listing-->
    <section class="listing-page">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="result-sorting-wrapper">
                        <div class="sorting-count">
                            <p><span>{{ $jumlahequipment }} Equipment</span></p>
                        </div>
                    </div>
                    @foreach ($equipment as $tampil)
                        <div class="product-listing-m gray-bg">
                            <div class="product-listing-img"><img src="{{ route('foto', ['filename' => $tampil->image1]) }}"
                                    class="img-responsive" alt="Image" />
                                </a>
                            </div>
                            <div class="product-listing-content">
                                <h5><a href="/detailequipment/{{ $tampil->id_equipment }}">{{ $tampil->nama_kategori }},
                                        {{ $tampil->nama_equipment }}</a></h5>
                                <p class="list-price">@currency($tampil->harga) / Hari</p>
                                <ul>
                                    <li><i class="fa fa-camera" aria-hidden="true"></i>{{ $tampil->jumlah }} Jumlah</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $tampil->tahun }} </li>
                                </ul>
                                <a href="/detailequipment/{{ $tampil->id_equipment }}" class="btn">Lihat Detail <span
                                        class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    @endforeach
                    <div class="pull-right">
                        {{ $equipment->links() }}
                    </div>
                </div>

                <!--Side-Bar-->
                <aside class="col-md-3 col-md-pull-9">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-filter" aria-hidden="true"></i>Cari Equipment</h5>
                        </div>
                        <div class="sidebar_filter">
                            <form action="{{ route('cariequipment') }}" method="get">
                                <div class="form-group select">
                                    <select class="form-control" name="namakategori" required=""
                                        data-parsley-error-message="Field ini harus diisi">
                                        <option value="">== Pilih Category ==</option>
                                        @foreach ($kategori as $tampil)
                                            <option value='{{ $tampil->nama_kategori }}'>{{ $tampil->nama_kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block"><i
                                            class="fa fa-search"aria-hidden="true"></i>Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-camera" aria-hidden="true"></i>Equipment Terbaru</h5>
                        </div>
                        @foreach ($equipmentterbaru as $tampil)
                            <div class="recent_addedcars">
                                <ul>
                                    <li class="gray-bg">
                                        <div class="recent_post_img"> <a
                                                href="/detailequipment/{{ $tampil->id_equipment }}"><img
                                                    src="{{ route('foto', ['filename' => $tampil->image1]) }}"
                                                    alt="image"></a> </div>
                                        <div class="recent_post_title"> <a
                                                href="/detailequipment/{{ $tampil->id_equipment }}">{{ $tampil->nama_kategori }},
                                                {{ $tampil->nama_equipment }}</a>
                                            <p class="widget_price">@currency($tampil->harga) / Hari</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endforeach

                    </div>

                </aside>
                <!--/Side-Bar-->
            </div>
        </div>
    </section>
@endsection
