<!-- {{ $fieldTitle }} Field -->
<div class="form-group row mb-3">
	@{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}', ['class' => 'form-label col-3 col-form-label pt-0']) !!}
  <div class="col">
    <label class="form-check">
			@{!! Form::checkbox('{{ $fieldName }}', '{{ $checkboxVal }}', null, ['class' => 'form-check-input']) !!}
      <span class="form-check-label">{{ $fieldName }}</span>
    </label>
  </div>
</div>
