@if ($paginator->hasPages())
    <nav class="pagination is-centered">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="pagination-previous" disabled>
                @lang('pagination.previous')
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-previous">
                @lang('pagination.previous')
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-next">
                @lang('pagination.next')
            </a>
        @else
            <span class="pagination-next" disabled>
                @lang('pagination.next')
            </span>
        @endif

        @if (!empty($elements))
            <ul class="pagination-list">
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled">
                            <span>{{ $element }}</span>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            <li>
                                @if ($page == $paginator->currentPage())
                                    <span class="pagination-link is-current">
                                        {{ $page }}
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="pagination-link">
                                        {{ $page }}
                                    </a>
                                @endif
                            </li>
                        @endforeach
                    @endif
                @endforeach
            </ul>
        @endif
    </nav>
@endif
