<!-- {{ $fieldTitle }} Field -->
<div class="form-group row mb-3">
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}', ['class' => 'form-label col-3 col-form-label pt-0']) !!}
  <div class="col">
    {!! $checkboxes !!}
  </div>
</div>
