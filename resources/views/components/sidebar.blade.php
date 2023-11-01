<header class="position-sticky shadow bg-white" style="height: 100vh;width: 20rem">
    <div style="max-width: 240px;" class="mx-auto">
        <h3 class="fw-bold text-center pt-4">
            <a href="/" class="nav-link">School Admin</a>
        </h3>
        <hr>
        <nav>
            <ul class="navbar-nav fw-bold">
                <li class="nav-item ps-4 {{ $title == 'siswa' ? 'bg-primary text-white rounded' : '' }}"><a
                        href="{{ route('students.index') }}" class="nav-link">Siswa</a></li>
                <li class="nav-item ps-4 {{ $title == 'jurusan' ? 'bg-primary text-white rounded' : '' }}"><a
                        href="{{ route('classes.index') }}" class="nav-link">Kelas</a></li>
                <li class="nav-item ps-4 {{ $title == 'mapel' ? 'bg-primary text-white rounded' : '' }}"><a
                        href="" class="nav-link">Mata Pelajaran</a></li>
            </ul>
        </nav>
    </div>
</header>
