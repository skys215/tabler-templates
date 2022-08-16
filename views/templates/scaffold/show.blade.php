@@extends('layouts.app')

@@section('title')
    @if($config->options->localized)
        @@lang('models/{!! $config->modelNames->camelPlural !!}.singular') @@lang('crud.detail')
    @else
        {{ $config->modelNames->human }} Details
    @endif
@@endsection

@@section('content')
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.show_fields')
      </div>
      <div class="card-footer">
        <div class="row align-items-center">
          <div class="col-auto">
              <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="btn btn-danger">
                @if($config->options->localized) @@lang('crud.back') @else Back @endif
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@@endsection
