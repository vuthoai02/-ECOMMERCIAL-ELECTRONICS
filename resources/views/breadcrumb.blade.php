<div>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/" class="pr-2">Home</a>
        </li>
        @for ($i = 2; $i <= count(Request::segments()); $i++)
            @if (($i < count(Request::segments())) & ($i > 0))
                <a href="{{ URL::to(implode('/', array_slice(Request::segments(), 0, $i, true))) }}">
                    <span class="pl-2">/</span>
                    {{ ucwords(Request::segment($i)) }}
                </a>
            @else
                <span class="px-2">/</span>
                {{ ucwords(str_replace('-', ' ', Request::segment($i))) }}
            @endif
        @endfor
    </ol>
</div>
