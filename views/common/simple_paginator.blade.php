@if ($paginator->hasPages())
  <ul class="pagination m-0 ms-auto">
    <li class="page-item @if (!$paginator->onFirstPage()) disabled @endif">
      <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1" @if (!$paginator->onFirstPage()) aria-disabled="true" @endif>
        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>
        prev
      </a>
    </li>

    {{-- Next Page Link --}}
    <li class="page-item" @if ($paginator->hasMorePages()) disabled @endif>
      <a class="page-link" href="{{ $paginator->nextPageUrl() }}" @if ($paginator->hasMorePages()) aria-disabled="true" @endif>
        next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>
      </a>
    </li>
  </ul>
@endif
