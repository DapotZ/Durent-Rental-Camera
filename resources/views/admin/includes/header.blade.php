<div class="brand clearfix">
    <a href="{{ route('admindashboard') }}" style="font-size: 20px;"><img src="{{ asset('assets/images/Asset 4.svg') }}"
            alt="image" style="width: 147px;
		height: 37px; margin-top:9px;" /></a>
    <ul class="ts-profile-nav">
        <li class="ts-account">
            <a href="#">Administrator <i class="fa fa-angle-down hidden-side"></i></a>
            <ul>
                <li><a href="{{ route('ubahpassword') }}">Ubah Password</a></li>
                <li><a href="/">Home Page</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</div>
