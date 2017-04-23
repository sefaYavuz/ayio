<div class="container">
    <nav class="nav">
        <div class="nav-left">
            <a href="{{ url('/') }}" class="nav-item">
                LOGO
            </a>
        </div>

        <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
        <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
        <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>

        <!-- This "nav-menu" is hidden on mobile -->
        <!-- Add the modifier "is-active" to display it on mobile -->
        <div class="nav-right nav-menu">
            @foreach ($menu as $menuItem)
                <a href="{{ url($menuItem->url) }}" class="nav-item is-tab {{ Request::is($menuItem->slug) ? 'is-active' : '' }}">{{ $menuItem->title }}</a>
            @endforeach
        </div>
    </nav>
</div>
