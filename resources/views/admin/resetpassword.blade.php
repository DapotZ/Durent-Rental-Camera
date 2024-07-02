@extends('layouts.admin')
@section('title', 'Durent | Reset Password')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Reset Password</h2>

                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Form Reset Password</div>
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
                                        <form method="POST" action="{{ route('resetpassword', $user->id) }}"
                                            class="form-horizontal">
                                            @csrf
                                            <div class="form-group">
                                                <label for="password" class="col-sm-2 control-label">New Password</label>
                                                <div class="col-sm-5">
                                                    <input id="password" type="password" class="form-control"
                                                        name="password" required autocomplete="new-password">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <button type="submit" class="btn btn-primary">Reset Password</button>
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
