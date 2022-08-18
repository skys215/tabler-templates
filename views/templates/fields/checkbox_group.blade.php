<!-- {{ $fieldTitle }} Field -->
<div class="form-group row mb-3">

  @if($config->options->localized)
      @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}'), ['class' => 'form-label col-3 col-form-label pt-0']) !!}
    @else
      @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}', ['class' => 'form-label col-3 col-form-label pt-0']) !!}
    @endif
  <div class="col">
    {!! $checkboxes !!}
  </div>
</div>
