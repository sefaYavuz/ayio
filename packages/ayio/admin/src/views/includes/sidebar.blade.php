<div class="main">
    <aside class="menu">
        <ul class="menu-list">
            @foreach ($menu as $menuItems)
                @foreach($menuItems as $menuItem)
                    <li>
                        @if (!is_array($menuItem))
                            @php
                                $active = '';
                                $actives = array_reverse(json_decode($menuItem->actives));
                                $actives = implode('|', $actives);
                                $actives = '#(' . $actives . ')#';

                                if(preg_match($actives, Request::path(), $matches)) {
                                    if(Request::path() === $matches[1]) {
                                        $active = 'active';
                                    }
                                }
                            @endphp
                            <a href="{{ url($menuItem->url) }}" class="item {{ $active }}">
                                <span class="icon">
                                    <i class="{{ $menuItem->icon }}"></i>
                                </span>
                                <span class="name">{{ $menuItem->title }}</span>
                            </a>
                        @else
                            <ul>
                                @foreach ($menuItem as $child)
                                    @php
                                        $active = '';
                                        $actives = array_reverse(json_decode($child->actives));
                                        $actives = implode('|', $actives);
                                        $actives = '#(' . $actives . ')#';

                                        if(preg_match($actives, Request::path(), $matches)) {
                                            if(Request::path() === $matches[1]) {
                                                $active = 'active';
                                            }
                                        }
                                    @endphp
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
