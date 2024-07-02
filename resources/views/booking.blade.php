@extends('layouts.app')
@section('title', 'Durent | Tentang Kami')
@section('content')
    <section class="user_profile inner_pages">
        <div class="container">
            <div class="col-md-6 col-sm-8">
                <div class="product-listing-img"><img
                        src="admin/img/equipmentimages/kron-chronos-21-hd-high-speed-camera-27845288.jpeg.jpg"
                        class="img-responsive" alt="Image" /> </a> </div>
                <div class="product-listing-content">
                    <h5>kamera , Sony A6300</a></h5>
                    <p class="list-price">Rp. 50.000 / Hari</p>
                    <ul>
                        <li><i class="fa fa-camera" aria-hidden="true"></i>1 Jumlah</li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2023 </li>
                    </ul>
                </div>
            </div>

            <div class="user_profile_info">
                <div class="col-md-12 col-sm-10">
                    <form method="post" name="sewa" onSubmit="return valid();">
                        <input type="hidden" class="form-control" name="vid" value="39"required>
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input type="date" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)"
                                required>
                            <input type="hidden" name="now" class="form-control" value="2023-06-05">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="date" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)"
                                required>
                        </div>
                        <br />
                        <div class="form-group">
                            <input type="submit" name="submit" value="Cek Ketersediaan" class="btn btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
