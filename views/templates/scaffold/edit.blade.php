@@extends('layouts.app')

@@section('title')
  @if($config->options->localized)
      @@lang('crud.edit') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
  @else
      Edit {{ $config->modelNames->human }}
  @endif
@@endsection

@@section('content')
  @@include('tabler-templates::common.errors')
  <div class="col-12">
    @{!! Form::model(${{ $config->modelNames->camel }}, ['route' => ['{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.update', ${{ $config->modelNames->camel }}->{{ $config->primaryName }}], 'method' => 'patch', 'role' => 'form']) !!}
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
              @{!! Form::submit(@if($config->options->localized) __('crud.save') @else 'Save' @endif, ['class' => 'btn btn-primary']) !!}
            </div>
          </div>
        </div>
      </div>
    @{!! Form::close() !!}
  </div>
@@endsection
