<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="">
            <li class="nav-item search-bar">
                <i class='bi bi-search'></i>
                <form action="/students" method="GET">
                    <input type="search" name="search" placeholder="Search for student." class="">
                </form>
            </li>
        </ul>
    </nav>
    <div class="">
        <h3>Database</h3>
        <ul class="d-flex">
          <li><a href="/" class="{{ $title == 'Home' ? 'text-active' : '' }}">Home</a></li>
          <li><a href="{{ route('students') }}" class="{{ $title == 'Student' ? 'text-active' : '' }}">Student</a></li>
        </ul>
    </div>
    <hr>
</div>
