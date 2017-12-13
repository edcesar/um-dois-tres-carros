@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>&laquo;</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $post => $url)
                    @if ($post == $paginator->currentPage())
                        <li class="active"><span>{{ $post }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $post }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
            <li><a href="?page={{ $paginator->lastPage() }}" rel="next">&raquo;&raquo;</a></li>
        @else
            <li class="disabled"><span>&raquo;</span></li>
            <li class="disabled"><span>&raquo;&raquo;</span></li>
        @endif
    </ul>
@endif
