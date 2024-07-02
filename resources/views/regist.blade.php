@extends('layouts.app')
@section('title', 'About Us')
@section('content')

    </header><!-- /Header -->
    <section class="user_profile inner_pages">
        <div class="container">
            <div class="user_profile_info">
                <h6 align="center">Registrasi User</h6>
                <div class="col-md-12 col-sm-10">
                    @if ($errors->any())
                        {!! implode(
                            '',
                            $errors->all(
                                "<div class='alert alert-danger'>Maaf, terjadi kesalahan saat mendaftar. Mohon periksa kembali informasi yang Anda masukkan.</div>",
                            ),
                        ) !!}
                    @endif
                    @if (session('success'))
                        <div class='alert alert-success'>{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class='alert alert-danger'>{{ session('error') }}</div>
                    @endif
                    <form method="post" name="theform" action="{{ route('registuser') }}" id="theform"
                        onSubmit="return checkLetter(this);" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="equipmentnumber" placeholder="Nomer Telepon"
                                minlength="10" maxlength="15" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="emailid"
                                onBlur="checkAvailability()" placeholder="Alamat Email" required="required">
                            <span id="user-availability-status" style="font-size:12px;"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                                required="required">
                        </div>
                        <div class="form-group">
                            Upload Foto KTP<span style="color:red">*</span><input type="file" name="ktp"
                                accept="image/*" required>
                        </div>
                        <div class="form-group">
                            Upload Foto KK<span style="color:red">*</span><input type="file" name="kk"
                                accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pass" name="password"
                                placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="conf" name="password_confirmation"
                                placeholder="Konfirmasi Password" required="required">
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="terms_agree" name="setuju" required="required" checked="">
                            <label for="terms_agree">Saya Setuju dengan <a href="#">Syarat dan Ketentuan yang
                                    berlaku</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sign Up"class="btn btn-block">
                        </div>
                    </form>

                    <div class="modal-footer text-center">
                        <p>Sudah punya akun? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Disini</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- /About-us-->
@endsection
