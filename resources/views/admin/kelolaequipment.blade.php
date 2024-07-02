@extends('layouts.admin')
@section('title', 'Durent | Kelola Equipment')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Kelola Equipment</h2>
                        <!-- Zero Configuration Table -->
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
                        <div class="panel panel-default">
                            <div class="panel-heading">Daftar Equipment</div>
                            <div class="panel-body">
                                <table id="zctb" class="display table table-striped table-bordered table-hover"
                                    cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Equipment</th>
                                            <th>Category</th>
                                            <th>Detail</th>
                                            <th>Harga /Hari</th>
                                            <th>Jumlah</th>
                                            <th>Tahun</th>
                                            <th class="text-center"><a href="{{ route('tambahequipment') }}"><span
                                                        class="fa fa-plus-circle" style="margin-right: 5px;"></span>Tambah
                                                    Equipment</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        ?>
                                        @foreach ($equipment as $tampil)
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td>{{ $tampil->nama_equipment }}</td>
                                                <td>{{ $tampil->nama_kategori }}</td>
                                                <td>{{ $tampil->deskripsi }}</td>
                                                <td>@currency($tampil->harga)</td>
                                                <td>{{ $tampil->jumlah }}</td>
                                                <td>{{ $tampil->tahun }}</td>
                                                <td class="text-center"><a
                                                        href="/editequipment/{{ $tampil->id_equipment }}/edit"><i
                                                            class="fa fa-edit" style="color: #3E3F3A"></i></a>&nbsp;&nbsp;
                                                    <form action="/tambahequipment/{{ $tampil->id_equipment }}"
                                                        method="post" style="display: inline">
                                                        @csrf
                                                        <button style="border: none; background: none; color: #3E3F3A"
                                                            type="submit"
                                                            onclick="return confirm('Apakah anda yakin akan menghapus Kamera?');"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    @endsection
