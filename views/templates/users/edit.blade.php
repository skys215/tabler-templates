@extends('layouts.app')

@section('title')
        Edit User
  @endsection

@section('content')
  @include('tabler-templates::common.errors')
  <div class="col-12">
    {!! Form::model($aaa, ['route' => ['users.update', $aaa->id], 'method' => 'patch', 'role' => 'form']) !!}
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
