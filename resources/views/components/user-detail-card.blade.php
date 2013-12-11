<div class="row mb-3">
  <div class="col-8">
    <div>
      <div class="mt-1 font-weight-bold">
        {{ $detail->title }}
      </div>

      <div class="mt-1">
        {{ $detail->description }}
      </div>
    </div>
  </div>

  @can('owner', $user)
    <div class="col-4 d-flex justify-content-start align-items-end">
      <div class="mx-0">
        <a class="btn btn-primary" href="{{ route('detail.edit', ['detail' => $detail->id]) }}">
          Edit
        </a>
      </div>

      <form class="col mx-0" action="{{ route('detail.destroy', ['detail' => $detail->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Remove</button>
      </form>
    </div>
  @endcan
</div>
