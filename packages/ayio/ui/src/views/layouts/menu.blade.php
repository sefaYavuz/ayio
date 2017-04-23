<nav class="nav has-shadow" id="top">
  <div class="container">
    <div class="nav-left">
        <a href="{{ url('/') }}" class="nav-item">
            LOGO
        </a>
    </div>
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu">
      @foreach ($menu as $menuItem)
        <a href="{{ url($menuItem->url) }}" class="nav-item is-tab {{ Request::is($menuItem->slug) ? 'is-active' : '' }}">{{ $menuItem->title }}</a>
      @endforeach
      <span class="nav-item">
        <a class="button">
          Log in
        </a>
        <a class="button is-info">
          Sign up
        </a>
      </span>
    </div>
  </div>
</nav>
