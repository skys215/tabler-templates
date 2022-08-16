@foreach (session('flash_notification', collect())->toArray() as $message)
    <div class="card mb-2">
      <div class="card-status-top bg-secondary"></div>
      <div class="card-body">
        <p>{!! $message['message'] !!}</p>
      </div>
    </div>
@endforeach
{{ session()->forget('flash_notification') }}
