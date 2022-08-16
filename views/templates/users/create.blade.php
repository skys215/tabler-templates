@extends('layouts.app')

@section('title')
        Create User
@endsection

@section('content')
  @include('tabler-templates::common.errors')
  <div class="col-12">
    {!! Form::open(['route' => 'users.store', 'role' => 'form']) !!}
      <div class="card">
        <div class="card-body">
          @include('users.fields')
        </div>
        <div class="card-footer">
          <div class="row align-items-center">
            <div class="col">
                <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
            </div>
            <div class="col-auto">
              {!! Form::submit( 'Save' , ['class' => 'btn btn-primary']) !!}
            </div>
          </div>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
@endsection
