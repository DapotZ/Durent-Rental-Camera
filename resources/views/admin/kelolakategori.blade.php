@extends('layouts.admin')
@section('title', 'Durent | Kelola Kategori')
@section('content')


    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <h2 class="page-title">Kelola Kategori</h2>

                    <!-- Zero Configuration Table -->
                    @if ($errors->any())
                        {!! implode('', $errors->all("<div class='alert alert-danger'>:message</div>")) !!}
                    @endif
                    @if (session('success'))
                        <div class='alert alert-success'>{{ session('success') }}</div>
                        <audio autoplay>
                            <source src="{{ asset('sounds/Success sound effect (copyright free).mp3') }}" type="audio/mpeg">
                        </audio>
                    @endif
                    @if (session('error'))
                        <div class='alert alert-danger'>{{ session('error') }}</div>
                    @endif
                    <div class="panel panel-default">
                        <div class="panel-heading">Daftar kategori</div>
                        <div class="panel-body">
                            <table id="zctb" class="display table table-striped table-bordered table-hover"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Tgl. Dibuat</th>
                                        <th>Tgl. Update</th>
                                        <th class="text-center"><a href="{{ route('tambahkategori') }}"
                                                style="color: "><span class="fa fa-plus-circle"
                                                    style="margin-right: 5px;"></span>Tambah Category</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>
                                    @foreach ($kategori as $tampil)
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>{{ $tampil->nama_kategori }}</td>
                                            <td>{{ $tampil->CreationDate }}</td>
                                            <td>{{ $tampil->UpdationDate }}</td>
                                            <td align="center"><a href="/editkategori/{{ $tampil->id_kategori }}/edit"><i
                                                        class="fa fa-edit" style="color: #3E3F3A"></i></a>&nbsp;&nbsp;
                                                <form action="/editkategori/{{ $tampil->id_kategori }}" method="post"
                                                    style="display: inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button id="myButton"
                                                        style="border: none; background: none; color: #3E3F3A"
                                                        type="submit"
                                                        onclick="return confirm('Apakah anda yakin akan menghapus {{ $tampil->nama_kategori }}?');"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
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
