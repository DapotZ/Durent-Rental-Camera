@extends('layouts.admin')
@section('title', 'Durent | Update Contact')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Update Contact Info</h2>
                        @if ($errors->any())
                            {!! implode('', $errors->all("<div class='alert alert-danger'>:message</div>")) !!}
                        @endif
                        @if (session('success'))
                            <div class='alert alert-success'>{{ session('success') }}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Form Kelola Info Kontak</div>
                                    <div class="panel-body">
                                        @foreach ($contactusinfo as $tampil)
                                            <form action="{{ route('ubahcontact') }}" method="post" name="chngpwd"
                                                class="form-horizontal" onSubmit="return valid();">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Alamat</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" name="address" id="address"
                                                            value="{{ $tampil->alamat_kami }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label"> Email</label>
                                                    <div class="col-sm-8">
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" value="{{ $tampil->email_kami }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label"> Telepon </label>
                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control"
                                                            value="{{ $tampil->telp_kami }}" name="contactno" id="contactno"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="hr-dashed"></div>
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-4">
                                                        <button class="btn btn-primary" name="submit" type="submit"
                                                            onclick="return confirm('Apakah anda yakin ingin merubah?');">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        @endforeach
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
