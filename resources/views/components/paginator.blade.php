@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled @if (empty($elements)) page-prev @endif" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">
                        @lang('pagination.previous')
                    </span>
                </li>
            @else
                <li class="page-item @if (empty($elements)) page-prev @endif">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        @lang('pagination.previous')
                    </a>
                </li>
            @endif

            @if (!empty($elements))
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true">
                            <span>{{ $element }}</span>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page">
                                    <span>{{ $page }}</span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item @if (empty($elements)) page-next @endif">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        @lang('pagination.next')
                    </a>
                </li>
            @else
                <li class="page-item disabled @if (empty($elements)) page-next @endif" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">
                        @lang('pagination.next')
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
