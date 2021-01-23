<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">{{ lang('admin.slug') }}</a>
    <a class="btn btn-light btn-sm" href="{{ route('home') }}">Back to site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            @foreach(lang('admin.tabs') as $tab)
                <li class="nav-item @if($tab['is_active']) active @endif">
                    <a class="nav-link" href="{{ $tab['link'] }}">{{ $tab['title']  }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
