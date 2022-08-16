@if(!empty($errors))
    @if($errors->any())
        @foreach($errors->all() as $error)
          <div class="card mb-2">
            <div class="card-status-top bg-danger"></div>
            <div class="card-body">
              <p>{{ $error }}</p>
            </div>
          </div>
        @endforeach
    @endif
@endif
