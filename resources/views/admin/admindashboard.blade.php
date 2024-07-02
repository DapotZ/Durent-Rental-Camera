@extends('layouts.admin')
@section('title', 'Durent | Admin Dashboard')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Dashboard</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-primary text-light">
                                                <div class="stat-panel text-center">
                                                    <div class="stat-panel-number h1 ">{{ $kategori }}</div>
                                                    <div class="stat-panel-title text-uppercase">Total KATEGORI</div>
                                                </div>
                                            </div>
                                            <a href="{{ route('kelolakategori') }}"
                                                class="block-anchor panel-footer text-center">Rincian &nbsp; <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-primary text-light">
                                                <div class="stat-panel text-center">
                                                    <div class="stat-panel-number h1 ">{{ $equipment }}</div>
                                                    <div class="stat-panel-title text-uppercase">Jumlah Equipment</div>
                                                </div>
                                            </div>
                                            <a href="{{ route('kelolaequipment') }}"
                                                class="block-anchor panel-footer text-center">Rincian &nbsp; <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-primary text-light">
                                                <div class="stat-panel text-center">
                                                    <div class="stat-panel-number h1 ">{{ $users }}</div>
                                                    <div class="stat-panel-title text-uppercase">User</div>
                                                </div>
                                            </div>
                                            <a href="{{ route('kelolauser') }}"
                                                class="block-anchor panel-footer text-center">Rincian <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-primary text-light">
                                                <div class="stat-panel text-center">
                                                    <div class="stat-panel-number h1 ">{{ $contactus }}</div>
                                                    <div class="stat-panel-title text-uppercase">Menghubungi</div>
                                                </div>
                                            </div>
                                            <a href="{{ route('kelolacontact') }}"
                                                class="block-anchor panel-footer text-center">Rincian &nbsp; <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endsection
