<li>
    @if($route != "")
    <a 
        class="dropdown-item" 
        href="{{ route($route) }}"
    >
    {{-- iten title --}}
        {{$title}}
    </a>
    @else
    <a 
        class="dropdown-item" 
        href="#"
>
        {{-- iten title --}}
        {{$title}}
    </a>
    @endif
</li>