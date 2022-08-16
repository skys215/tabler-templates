@extends('layouts.app')

@section('title')
    User Details
@endsection

@section('content')
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        @include('users.show_fields')
      </div>
      <div class="card-footer">
        <div class="row align-items-center">
          <div class="col-auto">
              <a href="{{ route('users.index') }}" class="btn btn-danger">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
