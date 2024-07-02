@extends('layouts.admin')
@section('title', 'Durent | Edit Equipment')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Edit Equipment</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Form Edit Equipment</div>
                                    <div class="panel-body">

                                        <form method="POST" class="form-horizontal" name="theform"
                                            action="/editequipment/{{ $equipment->id_equipment }}/update"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Nama Equipment<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="nametitle" class="form-control"
                                                        value="{{ $equipment->nama_equipment }}" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Category<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="kategori" required=""
                                                        value="" data-parsley-error-message="Field ini harus diisi">
                                                        <option selected value="{{ $equipment->id_kategori }}">
                                                            {{ $equipment->nama_kategori }}</option>
                                                        @foreach ($kategori as $tampil)
                                                            <option value='{{ $equipment->id_kategori }}'>
                                                                {{ $tampil->nama_kategori }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Deskripsi Equipment<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="deskripsi"
                                                        value="{{ $equipment->deskripsi }}" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Jumlah Equipment<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="number" name="jumlah" class="form-control"
                                                        value="{{ $equipment->jumlah }}" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Harga /Hari<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="price" class="form-control"
                                                        value="{{ $equipment->harga }}" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Tahun Registrasi<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="modelyear" class="form-control"
                                                        value="2023" required>
                                                </div>
                                            </div>

                                            <div class="hr-dashed"></div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <h4><b>Gambar Equipment</b></h4>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    Gambar 1 </br><img
                                                        src="{{ route('foto', ['filename' => $equipment->image1]) }}"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="39"required>

                                                        <label class="col-sm-6">Upload Gambar 1 Baru<span
                                                                style="color:red">*</span></label>
                                                        </br>
                                                        </br>
                                                        <div class="col-sm-4">
                                                            <input type="file" name="img1" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    Gambar 2 </br><img
                                                        src="{{ route('foto', ['filename' => $equipment->image2]) }}"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="39"required>

                                                        <label class="col-sm-6">Upload Gambar 2 Baru<span
                                                                style="color:red">*</span></label>
                                                        </br>
                                                        </br>
                                                        <div class="col-sm-4">
                                                            <input type="file" name="img2" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    Gambar 3 </br><img
                                                        src="{{ route('foto', ['filename' => $equipment->image3]) }}"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="39"required>

                                                        <label class="col-sm-6">Upload Gambar 3 Baru<span
                                                                style="color:red">*</span></label>
                                                        </br>
                                                        </br>
                                                        <div class="col-sm-4">
                                                            <input type="file" name="img3" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    Gambar 4</br><img
                                                        src="{{ route('foto', ['filename' => $equipment->image4]) }}"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="39"required>

                                                        <label class="col-sm-6">Upload Gambar 4 Baru<span
                                                                style="color:red">*</span></label>
                                                        </br>
                                                        </br>
                                                        <div class="col-sm-4">
                                                            <input type="file" name="img4" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    Gambar 5</br>
                                                    <img src="{{ route('foto', ['filename' => $equipment->image5]) }}"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="39"required>

                                                        <label class="col-sm-6">Upload Gambar 5 Baru<span
                                                                style="color:red">*</span></label>
                                                        </br>
                                                        </br>
                                                        <div class="col-sm-4">
                                                            <input type="file" name="img5" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hr-dashed"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="checkbox checkbox-inline">
                                                    <button class="btn btn-primary" type="submit"
                                                        style="margin-top:4%">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </form>

            </div>
        </div>
        </div>

    @endsection
