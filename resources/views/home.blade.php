
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if(Auth::check())
        @if(Auth::user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
        </li>
        @endif
   
        @if(Auth::user()->role == 'hubin')
        <li class="nav-item">
            <a class="nav-link" href="{{url('hubin')}}">Halaman Hubin</a>
        </li>
        @endif
           
        <li class="nav-item">
            <a class="nav-link" href="{{url('siswa')}}">Halaman Siswa</a>
        </li>

        @endif
    </ul>
