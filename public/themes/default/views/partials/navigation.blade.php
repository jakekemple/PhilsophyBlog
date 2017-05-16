@foreach($pages as $page)
    <li class="{{ Request::is($page->uri_wildcard) ? 'active' : '' }} {{ count($page->children) ? ($page->isChild() ? 'dropdown-submenu' : 'dropdown') : '' }}">
        <a href="{{ url($page->uri) }}">
            {{ $page->title }}

            @if(count($page->children))
                <span class="caret {{ $page->isChild() ? 'right' : '' }}"></span>
            @endif
        </a>

        @if(count($page->children))
            <li style="border-top:none; padding-left:1em;" class="dropdown-menu">
                @include('partials.navigation', ['pages' => $page->children])
            </li>
        @endif
    </li>
@endforeach
