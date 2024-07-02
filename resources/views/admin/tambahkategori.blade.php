@extends('layouts.admin')
@section('title', 'Durent | Tambah Kategori')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Tambah Category</h2>

                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Form Tambah Category</div>
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
                                        <form method="post" class="form-horizontal" action="{{ route('simpankategori') }}"
                                            onSubmit="return valid(this);">
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Nama Category</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="kategori"
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
