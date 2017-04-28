<div class="main">
    <aside class="menu">
        <ul class="menu-list">
            @foreach ($menu as $menuItems)
                @foreach($menuItems as $menuItem)
                    <li>
                    @if (!is_array($menuItem))

                            <a href="{{ url($menuItem->url) }}" class="item {{ in_array(Request::path(), json_decode($menuItem->actives)) ? 'active' : '' }}">
                                <span class="icon">
                                    <i class="{{ $menuItem->icon }}"></i>
                                </span>
                                <span class="name">{{ $menuItem->title }}</span>
                            </a>
                    @else
                        <ul>
                            @foreach ($menuItem as $child)
                                <li>
                                    <a href="{{ url($child->url) }}" class="item {{ in_array(Request::path(), json_decode($child->actives)) ? 'active' : '' }}">
                                        <span class="icon">
                                            <i class="{{ $child->icon }}"></i>
                                        </span>
                                        <span class="name">{{ $child->title }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    </li>
                @endforeach
            @endforeach
        </ul>
    </aside>
</div>
