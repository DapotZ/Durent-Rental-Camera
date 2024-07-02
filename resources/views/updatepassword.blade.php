@extends('layouts.app')
@section('title', 'Durent | Update Password')
@section('content')

    </header><!-- /Header -->
    <section class="user_profile inner_pages">
        <div class="container">
            <div class="user_profile_info">
                <div class="col-md-12 col-sm-10">
                    @if ($errors->any())
                        {!! implode('', $errors->all("<div class='alert alert-danger'>:message</div>")) !!}
                    @endif
                    @if (session('success'))
                        <div class='alert alert-success'>{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class='alert alert-danger'>{{ session('error') }}</div>
                    @endif
                    <form method="post" action="{{ route('updatepassworduser') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Current Password</label>
                            <input class="form-control white_bg" name="currentpassword" id="mail" type="password"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">New Password</label>
                            <input class="form-control white_bg" name="password" id="new" type="password" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Confirm Password</label>
                            <input class="form-control white_bg" name="password_confirmation" id="confirm" type="password"
                                required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn">Update Password <span class="angle_arrow"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- /About-us-->
@endsection
