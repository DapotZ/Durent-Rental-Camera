@extends('layouts.admin')
@section('title', 'Durent | Ganti Status')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Edit Status</h2>

                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Form Edit Status</div>
                                    <div class="panel-body">
                                        <form id="theform" name="theform" method="post" class="form-horizontal"
                                            action="/changestatus/{{ $contactus->id_cu }}" onSubmit="return valid(this);">
                                            @method('put')
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Status<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="status" required=""
                                                        value="" data-parsley-error-message="Field ini harus diisi">
                                                        <option value='0'>Baca</option>
                                                        <option value='1'>Sudah dibaca</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="hr-dashed"></div>
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
