<label class="form-check">
  @{!! Form::radio('{{ $fieldName }}', "{{ $value }}", null, ['class' => 'form-check-input']) !!}<span class="form-check-label"> {{ $label }}</span>
</label>