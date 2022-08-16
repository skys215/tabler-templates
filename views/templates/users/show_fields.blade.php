<!-- Name Field -->
<div class="form-group mb-3 row">
    {!! Form::label('name', 'Name:') !!}
    <div class="col">
        {!! $user->name !!}
    </div>
</div>

<!-- Email Field -->
<div class="form-group mb-3 row">
    {!! Form::label('email', 'Email:') !!}
    <div class="col">
        {!! $user->email !!}
    </div>
</div>
