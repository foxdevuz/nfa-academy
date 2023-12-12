<x-admin.index-layout>
    @foreach ($event as $item)
        <div class="card" style="width: 19rem; display:inline-block; margin: 0 1.2rem 1rem 1.2rem;">
            <div class="card-body">
                <h5 class="card-title"><img src="{{ asset("/storage/images/" . $item->event) }}" alt="Event image" class="img-fluid"></h5>
                <h6 class="card-body">{{ $item->time }}</h6>
                <a href="/event/delete?id={{ $item->id }}" class="btn btn-danger rounded">O'chirib tashlash</a>
            </div>
        </div>
    @endforeach
</x-admin.index-layout>
