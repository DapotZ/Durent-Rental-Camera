@extends('layouts.admin')
@section('title', 'Durent | Privacy Policy')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Kelola Halaman</h2>
                        @if ($errors->any())
                            {!! implode('', $errors->all("<div class='alert alert-danger'>:message</div>")) !!}
                        @endif
                        @if (session('success'))
                            <div class='alert alert-success'>{{ session('success') }}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Form Kelola Halaman</div>
                                    <div class="panel-body">



                                        <form action="{{ route('ubahprivacy') }}" method="post" name="chngpwd"
                                            class="form-horizontal" onSubmit="return valid();">
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Halaman yang diubah</label>
                                                <div class="col-sm-4">
                                                    <input type='text' class='form-control' value='Privacy And Policy'
                                                        readonly>
                                                </div>
                                            </div>
                                            <div class="hr-dashed"></div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Detail Halaman</label>
                                                <div class="col-sm-8">
                                                    <div>
                                                        <textarea class="form-control" name="privacy" id="privacy" required>{{ $privacy }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-4">
                                                    <button type="submit" name="submit" value="Update" id="submit"
                                                        class="btn-primary btn">Update</button>
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
