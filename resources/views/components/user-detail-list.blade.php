<div class="mb-5">
  <div class="h4">
    {{ $title }}
  </div>

  @foreach ($lists as $data)
    @include('components.user-detail-card', [ 'detail' => $data ])
  @endforeach

  @if (count($lists) === 0)
    <div class="h5 text-center font-italic font-weight-normal">
      No data found
    </div>
  @endif
</div>
