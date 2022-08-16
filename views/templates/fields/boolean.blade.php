<!-- 'Boolean {{ $fieldTitle }} Field' checked by default -->
@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}'), ['class' => 'form-label col-3 col-form-label pt-0']) !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
@endif
<label class="checkbox-inline">
    @{!! Form::checkbox('{{ $fieldName }}', 1, true) !!}
    <!-- remove {, true} to make it unchecked by default -->
</label>