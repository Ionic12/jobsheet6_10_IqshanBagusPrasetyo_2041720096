<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/urwelcome"><img src="img/me.png" alt="..." height="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/urwelcome">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "About Me") ? 'active' : '' }}" href="/aboutme">About Me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Comment") ? 'active' : '' }}" href="/comment">Comment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Coming Soon") ? 'active' : '' }}" href="/comingsoon">Coming Soon</a>
        </li>
        </ul>
    </div>
</nav>