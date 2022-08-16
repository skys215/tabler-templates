@@extends('layouts.app')

@@section('title')
    @if($config->options->localized)
        @@lang('models/{{ $config->modelNames->camelPlural }}.plural')
    @else
        {{ $config->modelNames->humanPlural }}
    @endif
@@endsection

@@section('page_title_action')
  <!-- Page title actions -->
  <div class="col-auto ms-auto d-print-none">
    <div class="btn-list">
      <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.create') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
        @if($config->options->localized)
            @@lang('crud.add_new')
        @else
            Add New
        @endif
      </a>
      <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
      </a>
    </div>
  </div>
@@endsection

@@section('content')
<div class="row row-cards">
  <div class="col-12">
    @@include('tabler-templates::common.message')
  </div>
  {!! $table !!}
</div>
@@endsection
