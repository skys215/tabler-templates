@@extends('layouts.app')

@@section('title')
  @if($config->options->localized)
      @@lang('crud.create') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
  @else
      Create {{ $config->modelNames->humanPlural }}
  @endif  
@@endsection

@@section('content')
  @@include('tabler-templates::common.errors')
  <div class="col-12">
    @{!! Form::open(['route' => '{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.store', 'role' => 'form']) !!}
      <div class="card">
        <div class="card-body">
          @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.fields')
        </div>
        <div class="card-footer">
          <div class="row align-items-center">
            <div class="col">
                <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="btn btn-danger">
                  @if($config->options->localized) @@lang('crud.cancel') @else Cancel @endif
                </a>
            </div>
            <div class="col-auto">
              @{!! Form::submit(@if($config->options->localized) @@lang('crud.save') @else 'Save' @endif, ['class' => 'btn btn-primary']) !!}
            </div>
          </div>
        </div>
      </div>
    @{!! Form::close() !!}
  </div>
@@endsection
