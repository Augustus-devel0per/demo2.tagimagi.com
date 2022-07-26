<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{setting()->website_name ?? ''}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" > ||| </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            
            <li class="nav-item @if($slug == 'home') active @endif">
                <a class="nav-link" href="{{ url('/') }}">Search</a>
            </li>
            <li class="nav-item @if($slug == 'submit-a-tag-profile') active @endif ">
                <a class="nav-link" href="{{ url('/submit-a-tag-profile') }}">Submit a Tag Profile</a>
            </li>
           
        </ul>
        </div>
    </div>
</nav>