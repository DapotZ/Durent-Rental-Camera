<div class="modal fade" id="myModal" tabindex="-1" role="dailog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Login</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="login_wrap">
                        <div class="col-md-12 col-sm-6">
                            @if ($errors->any())
                                {!! implode(
                                    '',
                                    $errors->all(
                                        "<div class='alert alert-danger'>Email atau Password salah!!</div> <script>alert('Email atau Password Salah!');</script>",
                                    ),
                                ) !!}
                            @endif
                            @if (session('success'))
                                <div class='alert alert-success'>{{ session('success') }}</div>
                            @endif
                            @if (session('error'))
                                <div class='alert alert-success'>{{ session('error') }}</div>
                            @endif
                            <form id="loginform" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Email address*">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password*">
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="remember">

                                </div>
                                <div class="form-group">
                                    <input type="submit" name="login" value="Login" class="btn btn-block">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <p>Belum punya akun? <a href="{{ route('regist') }}">Daftar Disini</a></p>
            </div>
        </div>
    </div>
</div>
