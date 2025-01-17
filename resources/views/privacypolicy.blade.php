@extends('layouts.app')
@section('title', 'About Us')
@section('content')

    <section class="page-header aboutus_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Privacy Policy</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <section class="about_us section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2>Privacy Policy</h2>
                <p>
                    {!! $privacy !!}
                </p>
            </div>
        </div>
    </section>

@endsection
