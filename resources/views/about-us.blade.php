@extends('layouts.app')
@section('title', 'Durent | Tentang Kami')
@section('content')

    <section class="page-header aboutus_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Tentang Kami</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Tentang Kami</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <section class="about_us section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2>Tentang Kami</h2>
                <p>
                    {!! $about !!}
                </p>
            </div>
        </div>
    </section>

    <!-- /About-us-->
@endsection
