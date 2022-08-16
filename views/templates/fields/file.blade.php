<!-- {{ $fieldTitle }} Field -->
<div class="form-group mb-3 row">
  @if($config->options->localized)
      @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}'), ['class' => 'form-label col-3 col-form-label pt-0']) !!}
  @else
      @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}', ['class' => 'form-label col-3 col-form-label pt-0']) !!}
  @endif

  @{!! Form::file('{{ $fieldName }}', ['class' => 'form-control']) !!}
</div>
