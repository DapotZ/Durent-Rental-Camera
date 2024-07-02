@extends('layouts.app')
@section('title', 'Durent | Hubungi Kami')
@section('content')

    <section class="page-header contactus_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Hubungi Kami</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Hubungi Kami</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->

    <!--Contact-us-->
    <section class="contact_us section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Ada Pertanyaan? Silahkan Isi Form Berikut </h3>
                    <div class="contact_form gray-bg">
                        <form action="{{ route('hubungikami') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Full Name <span>*</span></label>
                                <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email Address <span>*</span></label>
                                <input type="email" name="email" class="form-control white_bg" id="emailaddress"
                                    required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Phone Number <span>*</span></label>
                                <input type="number" name="contactno" class="form-control white_bg" id="phonenumber"
                                    required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Message <span>*</span></label>
                                <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn" type="submit" name="send" type="submit">Send Message <span
                                        class="angle_arrow"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Info Kontak</h3>
                    <div class="contact_detail">
                        <ul>
                            <li>
                                <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="contact_info_m">{{ $contact->alamat_kami }}</div>
                            </li>
                            <li>
                                <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="contact_info_m"><a href="">{{ $contact->email_kami }}</a></div>
                            </li>
                            <li>
                                <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                <div class="contact_info_m"><a href="">{{ $contact->telp_kami }}</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /About-us-->
@endsection
