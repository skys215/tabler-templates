<!-- {{ $fieldTitle }} Field -->
<div class="form-group mb-3 row">
  @if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}').':',['class' => 'col-3']) !!}
  @else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}:',['class' => 'col-3']) !!}
  @endif
  <div class="col">
    @{{ ${!! $config->modelNames->camel !!}->{!! $fieldName !!} }}
  </div>
</div>
