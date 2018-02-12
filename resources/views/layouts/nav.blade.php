<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-link {{ request()->is('patients*') ? 'active' : '' }}" href="/patients">Patients</a>
            <a class="nav-link {{ request()->is('doctors*') ? 'active' : '' }}" href="/doctors">Doctors</a>
            <a class="nav-link {{ request()->is('records*') ? 'active' : '' }}" href="/records">Records</a>
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>

            @if(Auth::check())
                <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
                <a class="nav-link ml-auto" href="/logout">logout</a>
            @else
                <a class="nav-link ml-auto" href="/login">login</a>
                <a class="nav-link ml-auto" href="/register">register</a>
            @endif
        </nav>
    </div>
</div>
