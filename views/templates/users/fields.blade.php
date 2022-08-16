<!-- Name Field -->
<div class="form-group mb-3 row">
    {!! Form::label('name', 'Name') !!}
    <div class="col">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Email Field -->
<div class="form-group mb-3 row">
    {!! Form::label('email', 'Email') !!}
    <div class="col">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Password Field -->
<div class="form-group mb-3 row">
    {!! Form::label('password', 'Password') !!}
    <div class="col">
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Confirmation Password Field -->
<div class="form-group mb-3 row">
    {!! Form::label('password', 'Password Confirmation') !!}
    <div class="col">
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>
</div>
