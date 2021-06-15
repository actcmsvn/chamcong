@if ($paginator->hasPages())
<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <li class="page-item">
            <a href="#" class="page-link @if ($paginator->onFirstPage()) disabled-link @endif" aria-label="Previous">
                <i class="ti-angle-left"></i>
            </a>
        </li>
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item">
                            <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item active">
                            <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        <li class="page-item">
            <a href="#" class="page-link @if (!$paginator->hasMorePages()) disabled-link @endif" aria-label="Next">
                <i class="ti-angle-right"></i>
            </a>
        </li>
    </ul>
</nav>
@endif