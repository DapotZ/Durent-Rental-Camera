<!--Footer -->

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <h6>Durent</h6>
                    <ul>
                        <li><a href={{ route('about') }}>Tentang Kami</a></li>
                        <li><a href="{{ route('faqs') }}">FAQs</a></li>
                        <li><a href="{{ route('privacypolicy') }}">Privacy</a></li>
                        @auth
                            @if (auth()->user()->isAdmin)
                                <li><a href="{{ route('admindashboard') }}">Admin Login</a></li>
                            @endif
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer-->
