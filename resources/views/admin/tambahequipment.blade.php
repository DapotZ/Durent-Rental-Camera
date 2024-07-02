@extends('layouts.admin')
@section('title', 'Durent | Tambah Equipment')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Tambah Equipment</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Form Tambah Equipment</div>
                                    <div class="panel-body">
                                        @if ($errors->any())
                                            {!! implode('', $errors->all("<div class='alert alert-danger'>:message</div>")) !!}
                                        @endif
                                        @if (session('success'))
                                            <div class='alert alert-success'>{{ session('success') }}</div>
                                        @endif
                                        @if (session('error'))
                                            <div class='alert alert-danger'>{{ session('error') }}</div>
                                        @endif
                                        <form method="post" name="theform" action="{{ route('insertequipment') }}"
                                            class="form-horizontal" onsubmit="return valid(this);"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Nama Equipment<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="nametitle" class="form-control" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Pilih Category<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="kategori" required=""
                                                        data-parsley-error-message="Field ini harus diisi">
                                                        <option value="">== Pilih Category ==</option>
                                                        @foreach ($kategori as $tampil)
                                                            <option value='{{ $tampil->id_kategori }}'>
                                                                {{ $tampil->nama_kategori }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Deskripsi <span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="deskripsi" class="form-control" required>
                                                </div>

                                                <label class="col-sm-2 control-label">Harga /Hari<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="number" min="0" name="price" class="form-control"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Tahun Registrasi<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="number" min="0" name="modelyear"
                                                        class="form-control" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Jumlah<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="number" min="1" name="jumlah" class="form-control"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="hr-dashed"></div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <h4><b>Upload Gambar</b></h4>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    Gambar 1<span style="color:red">*</span><input type="file"
                                                        name="img1" accept="image/*" required>
                                                </div>
                                                <div class="col-sm-4">
                                                    Gambar 2<span style="color:red">*</span><input type="file"
                                                        name="img2" accept="image/*" required>
                                                </div>
                                                <div class="col-sm-4">
                                                    Gambar 3<span style="color:red">*</span><input type="file"
                                                        name="img3" accept="image/*" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    Gambar 4<span style="color:red">*</span><input type="file"
                                                        name="img4" accept="image/*" required>
                                                </div>
                                                <div class="col-sm-4">
                                                    Gambar 5<span style="color:red">*</span><input type="file"
                                                        name="img5" accept="image/*" required>
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
                                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                                    <button class="btn btn-default" type="reset">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
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

    @endsection
