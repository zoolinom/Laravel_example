<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/patients">Patients</a>
            <a class="nav-link" href="/doctors">Doctors</a>
            <a class="nav-link" href="/records">Records</a>
            <a class="nav-link" href="#">About</a>

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
