<header>
    <div class="default-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <div class="logo"><a href="/"><img src="{{ asset('assets/images/durent logo.svg') }}"
                                alt="image" /></a> </div>
                </div>
                <div class="col-sm-9 col-md-10">
                    <div class="header_info">
                        <div class="header_widgets">
                            <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                            <p class="uppercase_text">For Support Mail us : </p>
                            <a href="mailto:info@example.com">Durent@gmail.com</a>
                        </div>
                        <div class="header_widgets">
                            <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                            <p class="uppercase_text">For Services Call Us: </p>
                            <a href="tel:61-1234-5678-09">+62-8xx-xxx-xxx</a>
                        </div>
                        <div class="social-follow">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        @guest
                            <div class="login_btn"> <a href="#myModal" class="btn btn-xs uppercase" data-toggle="modal"
                                    data-dismiss="modal">Masuk</a> </div>
                        @endguest
                        @auth
                            Selamat Datang!
                        @endauth



                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav id="navigation_bar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse"
                    class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="header_wrap">
                @auth
                    <div class="user_login">
                        <ul>
                            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                                    {{ Auth::user()->name }}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('profile') }}" data-toggle="modal" data-dismiss="modal">Profile
                                            Settings</a></li>
                                    <li><a href="{{ route('updatepassword') }}" data-toggle="modal"
                                            data-dismiss="modal">Update Password</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                        </ul>
                    </div>
                @endauth
                @guest
                    <div class="user_login">
                        <ul>
                            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#myModal" data-toggle="modal" data-dismiss="modal">Profile Settings</a>
                                    </li>
                                    <li><a href="#myModal" data-toggle="modal" data-dismiss="modal">Update Password</a></li>
                                    <li><a href="#myModal" data-toggle="modal" data-dismiss="modal">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('daftarequipment') }}">Daftar Equipment</a>
                    <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('faqs') }}">FAQs</a></li>
                    <li><a href="{{ route('contact') }}">Hubungi Kami</a></li>

                </ul>
            </div>
        </div>
    </nav>


</header>
