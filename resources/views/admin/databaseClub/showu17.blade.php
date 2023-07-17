<x-admin.index-layout>
    @foreach ($coach as $item)
        <div class="card" style="width: 19rem; display:inline-block; margin: 0 1.2rem 1rem 1.2rem;">
            <img class="card-img-top" src="/storage/images/{{ $item->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <h5 class="card-body">{{ $item->birthday }}</h5>
                <a href="/coach/delete?id={{ $item->id }}&club_id=17" class="btn btn-danger rounded">O'chirib tashlash</a>
            </div>
        </div>
    @endforeach
    @foreach ($all as $item)
        <div class="card" style="width: 19rem; display:inline-block; margin: 0 1.2rem 1rem 1.2rem;">
            <img class="card-img-top" src="/storage/images/{{ $item->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <h5 class="card-body">{{ $item->birthday }}</h5>
                <a href="/club/delete?id={{ $item->id }}&club_id=17" class="btn btn-danger rounded">O'chirib tashlash</a>
            </div>
        </div>
    @endforeach
</x-admin.index-layout>
