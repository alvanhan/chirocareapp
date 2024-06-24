<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a class="has-arrow" href="{{ route('pemesanan.index') }}" aria-expanded="false"><i class="icon icon-app-store"></i><span
                        class="nav-text">Management Pemesanan</span></a>
            </li>
            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Management Pembayaran</span></a>
            </li> --}}
            <li><a class="has-arrow" href="{{ route('layanan.index') }}" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Management Layanan</span></a>
            </li>
            <li><a class="has-arrow" href="{{  route('jenis_layanan.index') }}" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Management Jenis Layanan</span></a>
            </li>
        </ul>
    </div>
</div>
