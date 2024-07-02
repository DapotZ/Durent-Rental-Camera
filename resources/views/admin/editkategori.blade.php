@extends('layouts.admin')
@section('title', 'Durent | Edit Kategori')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Edit Category</h2>

                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Form Edit Category</div>
                                    <div class="panel-body">
                                        <form id="theform" name="theform" method="post" class="form-horizontal"
                                            action="/editkategori/{{ $kategori->id_kategori }}"
                                            onSubmit="return valid(this);">
                                            @method('put')
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Nama Category</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control"
                                                        value="{{ $kategori->nama_kategori }}" name="nama_kategori"
                                                        id="brand" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    @endsection
