@extends('layouts.app')
@section('title', 'Durent | Profile Settings')
@section('content')

    <section class="page-header profile_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Profil Anda</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Profile</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->


    <section class="user_profile inner_pages">
        <div class="container">
            <div class="user_profile_info">

                <div class="col-md-12 col-sm-10">
                    @if ($errors->any())
                        {!! implode('', $errors->all("<div class='alert alert-danger'>:message</div>")) !!}
                    @endif
                    <form enctype="multipart/form-data" action="{{ route('gantiprofile') }}" method="post" name="theform">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Tanggal Daftar -</label>
                            {{ auth()->user()->created_at }}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nama</label>
                            <input class="form-control white_bg" name="fullname" value="{{ auth()->user()->name }}"
                                id="fullname" type="text" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Alamat Email</label>
                            <input class="form-control white_bg" value="{{ auth()->user()->email }}" name="email"
                                id="email" type="email" required readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telepon</label>
                            <input class="form-control white_bg" name="equipmentnumber" value="{{ auth()->user()->number }}"
                                id="phone-number" type="number" min="0" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Alamat</label>
                            <textarea class="form-control white_bg" name="address" rows="4">{{ auth()->user()->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">KTP</label><br />
                            <img src="{{ route('foto', ['filename' => auth()->user()->ktp]) }}" width="300"
                                height="200" style="border:solid 1px #000"><br />
                            <div class="form-group">
                                Ganti Foto KTP<span style="color:red">*</span><input type="file" name="ktp"
                                    accept="image/*">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">KK</label><br />
                            <img src="{{ route('foto', ['filename' => auth()->user()->kk]) }}" width="300" height="200"
                                style="border:solid 1px #000"><br />
                            <div class="form-group">
                                ganti Foto KK<span style="color:red">*</span><input type="file" name="kk"
                                    accept="image/*">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="updateprofile" class="btn">Simpan Perubahan <span
                                    class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- /About-us-->
@endsection
