@extends('layouts.admin')
@section('title', 'Durent | Kelola Contact')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Manage Contact</h2>
                        @if ($errors->any())
                            {!! implode('', $errors->all("<div class='alert alert-danger'>:message</div>")) !!}
                        @endif
                        @if (session('success'))
                            <div class='alert alert-success'>{{ session('success') }}</div>
                            <audio autoplay>
                                <source
                                    src="{{ asset('sounds/WhatsApp Audio 2023-06-21 at 13.39.36.dat (online-audio-converter.com).mp3') }}"
                                    type="audio/mpeg">
                            </audio>
                        @endif
                        @if (session('error'))
                            <div class='alert alert-danger'>{{ session('error') }}</div>
                        @endif

                        <!-- Zero Configuration Table -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Hubungi Kami</div>
                            <div class="panel-body">
                                <table id="zctb" class="display table table-striped table-bordered table-hover"
                                    cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Telp</th>
                                            <th>Pesan</th>
                                            <th>Tgl. Posting</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        ?>
                                        @foreach ($contactus as $tampil)
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td>{{ $tampil->nama_visit }}</td>
                                                <td>{{ $tampil->email_visit }}</td>
                                                <td>{{ $tampil->telp_visit }}</td>
                                                <td>{{ $tampil->pesan }}</td>
                                                <td>{{ $tampil->tgl_posting }}</td>
                                                @if ($tampil->status != '1')
                                                    <td><a href="/changestatus/{{ $tampil->id_cu }}">Baca</a></td>
                                                @else
                                                    <td><a href="/changestatus/{{ $tampil->id_cu }}">Sudah dibaca</a></td>
                                                @endif

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
