<nav aria-label="Page navigation example">
    @if ($paginator->hasPages())
    <ul class="pagination justify-content-end">
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        @endif

        @foreach ($elements as $element)
        @if (is_string($element))
        <li class="page-item disabled"><a class="page-link">{{ $element }}</a></li>
        @endif

        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item"><a class="page-link">{{ $page }}</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
        @else
        <li class="page-item disabled">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
        @endif
    </ul>
    @endif
</nav>






{{-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
<span aria-hidden="true">&raquo;</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>




@if ($paginator->hasPages())
<ul class="pager">

    @if ($paginator->onFirstPage())
    <li class="disabled"><span>← Previous</span></li>
    @else
    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
    @endif



    @foreach ($elements as $element)

    @if (is_string($element))
    <li class="disabled"><span>{{ $element }}</span></li>
    @endif



    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="active my-active"><span>{{ $page }}</span></li>
    @else
    <li><a href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach



    @if ($paginator->hasMorePages())
    <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
    @else
    <li class="disabled"><span>Next →</span></li>
    @endif
</ul>
@endif --}}