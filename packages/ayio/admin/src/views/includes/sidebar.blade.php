<div class="main">
    @foreach ($menu as $menuItem)
        <a href="{{ url($menuItem->url) }}" class="item {{ in_array(Request::path(), json_decode($menuItem->actives)) ? 'active' : '' }}">
            <span class="icon">
                <i class="{{ $menuItem->icon }}"></i>
            </span>
            <span class="name">{{ $menuItem->title }}</span>
        </a>
    @endforeach
</div>
