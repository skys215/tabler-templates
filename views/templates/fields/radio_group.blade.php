<!-- {{ $fieldName }} Field -->
<div class="form-group mb-3 row">
  @if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}'), ['class' => 'form-label col-3 col-form-label]']) !!}
  @else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}', ['class' => 'form-label col-3 col-form-label]']) !!}
  @endif
  <div class="col">
    {!! $radioButtons !!}
  </div>
</div>
