@extends('layouts.admin')
@section('title', 'Durent | Kelola User')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">User</h2>
                        @if ($errors->any())
                            {!! implode('', $errors->all("<div class='alert alert-danger'>:message</div>")) !!}
                        @endif
                        @if (session('success'))
                            <div class='alert alert-success'>{{ session('success') }}</div>
                            <audio autoplay>
                                <source src="{{ asset('sounds/Success sound effect (copyright free).mp3') }}"
                                    type="audio/mpeg">
                            </audio>
                        @endif
                        @if (session('error'))
                            <div class='alert alert-danger'>{{ session('error') }}</div>
                        @endif
                        <!-- Zero Configuration Table -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Daftar User</div>
                            <div class="panel-body">
                                <table id="zctb" class="display table table-striped table-bordered table-hover"
                                    cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Telp</th>
                                            <th>Alamat</th>
                                            <th>KTP</th>
                                            <th>KK</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        ?>
                                        @foreach ($users as $tampil)
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td>{{ $tampil->name }}</td>
                                                <td>{{ $tampil->email }}</td>
                                                <td>{{ $tampil->number }}</td>
                                                <td>{{ $tampil->alamat }}</td>
                                                <td><img src="{{ route('foto', ['filename' => $tampil->ktp]) }}"
                                                        width="40" height="30"></a></td>
                                                <td><img src="{{ route('foto', ['filename' => $tampil->kk]) }}"
                                                        width="40" height="30"></a></td>
                                                <td class="text-center">
                                                    <a href="#myModal{{ $tampil->id }}" data-toggle="modal"
                                                        data-load-code="{{ $tampil->email }}"
                                                        data-remote-target="#myModal{{ $tampil->id }} .modal-body"><span
                                                            class="glyphicon glyphicon-eye-open"
                                                            style="color: #3E3F3A"></span></a>&nbsp;&nbsp;&nbsp;
                                                    <a href="{{ route('showresetpassword', $tampil->id) }}"><i
                                                            class="fa fa-refresh" style="color: #3E3F3A"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Large modal -->
                                @foreach ($users as $tampil)
                                    <div class="modal fade bs-example-modal" id="myModal{{ $tampil->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div id="section-to-print">
                                                        <div id="only-on-print">
                                                        </div>
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"><span
                                                                    aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Detail Member</h4>
                                                        </div>
                                                        <div><br /></div>
                                                        <form id="theform" data-parsley-validate
                                                            class="form-horizontal form-label-left" action="/"
                                                            method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                                    for="nama">Nama</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input type="text" id="nis" required="required"
                                                                        class="form-control col-md-7 col-xs-12"
                                                                        name="nama"
                                                                        data-parsley-error-message="Field ini harus diisi"
                                                                        value="{{ $tampil->name }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                                    for="nama">Email</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input type="text" id="nis" required="required"
                                                                        class="form-control col-md-7 col-xs-12"
                                                                        name="nama"
                                                                        data-parsley-error-message="Field ini harus diisi"
                                                                        value="{{ $tampil->email }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                                    for="nama">Telepon</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input type="text" id="nis" required="required"
                                                                        class="form-control col-md-7 col-xs-12"
                                                                        name="nama"
                                                                        data-parsley-error-message="Field ini harus diisi"
                                                                        value="{{ $tampil->number }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                                    for="nama">Alamat</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input type="text" id="nis" required="required"
                                                                        class="form-control col-md-7 col-xs-12"
                                                                        name="nama"
                                                                        data-parsley-error-message="Field ini harus diisi"
                                                                        value="{{ $tampil->alamat }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                                    for="nama">Tanggal Daftar</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input type="text" id="nis"
                                                                        required="required"
                                                                        class="form-control col-md-7 col-xs-12"
                                                                        name="nama"
                                                                        data-parsley-error-message="Field ini harus diisi"
                                                                        value="{{ $tampil->created_at }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                                    for="nama">KTP</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <img src="{{ route('foto', ['filename' => $tampil->ktp]) }}"
                                                                        width="200" height="150">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                                    for="nama">KK</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <img src="{{ route('foto', ['filename' => $tampil->kk]) }}"
                                                                        width="200" height="150">
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- Large modal -->



                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
        </div>

    @endsection
