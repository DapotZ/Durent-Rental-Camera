<nav class="ts-sidebar">
    <ul class="ts-sidebar-menu">
        <li class="ts-label">Main</li>
        <li><a href="{{ route('admindashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#"><i class="fa fa-camera"></i> Equipment</a>
            <ul class="ts-sidebar-menu">
                <li><a href="{{ route('kelolakategori') }}">Data Kategori</a></li>
                <li><a href="{{ route('kelolaequipment') }}">Data Equipment</a></li>
            </ul>
        </li>
        <li><a href="{{ route('kelolauser') }}"><i class="fa fa-users"></i> User</a></li>
        <li><a href="{{ route('kelolacontact') }}"><i class="fa fa-comment"></i> Riwayat Chat</a></li>
        <li><a href="#"><i class="fa fa-gear"></i> Kelola Halaman</a>
            <ul class="ts-sidebar-menu">
                <li><a href="{{ route('tentangkami') }}">Tentang Kami</a></li>
                <li><a href="{{ route('FAQs') }}">FAQs</a></li>
                <li><a href="{{ route('privacy') }}">Privacy policy</a></li>
                <li><a href="{{ route('updatecontact') }}">Kontak Info</a></li>
            </ul>
        </li>

    </ul>
</nav>
