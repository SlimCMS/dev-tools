<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            @foreach(lang('home.tabs') as $tab)
                <li class="nav-item @if($tab['is_active']) active @endif">
                    <a class="nav-link" href="{{ $tab['link'] }}">{{ $tab['title']  }}</a>
                </li>
            @endforeach
        </ul>

        <span class="navbar-text">
            <span class="btn btn-secondary">Sign-in</span>
            <span class="btn btn-primary">Register</span>
        </span>
    </div>
</nav>
