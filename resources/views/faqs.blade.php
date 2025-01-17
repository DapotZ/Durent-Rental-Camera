@extends('layouts.app')
@section('title', 'Durent | FAQs')
@section('content')

    <section class="page-header aboutus_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>FAQs</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>FAQs</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <section class="about_us section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2>FAQs</h2>
                <p>
                    {!! $faqs !!}
                </p>
            </div>
        </div>
    </section>

    <!-- /About-us-->
@endsection
