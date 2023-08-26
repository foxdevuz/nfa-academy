<x-admin.index-layout>
    <div class="text-center">
        <a href="/change/{{ $club }}" class="text-center fs-6 border-danger py-3 px-4">Jamoani bir pog'ona ko'tarish</a>
    </div>
    <p class="text-center fs-3 text-capitalize">Jamoa {{ $club }}</p>
    @foreach ($coach as $item)
        <div class="card" style="width: 19rem; display:inline-block; margin: 0 1.2rem 1rem 1.2rem;">
            <img class="card-img-top" src="/public/storage/images/{{ $item->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <h5 class="card-body">{{ $item->birthday }}</h5>
                <a href="/coach/delete?id={{ $item->id }}&club_id={{ $club }}"
                    class="btn btn-danger rounded">O'chirib tashlash </a>
                <a href="/coach/edit?id={{ $item->id }}&club_id={{ $club }}"
                    class="btn btn-warning rounded">Tahrirlash</a>
            </div>
        </div>
    @endforeach
    @foreach ($students as $item)
        <div class="card" style="width: 19rem; display:inline-block; margin: 0 1.2rem 1rem 1.2rem;">
            <img class="card-img-top" src="/public/storage/images/{{ $item->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <h5 class="card-body">{{ $item->birthday }}</h5>
                <a href="/club/delete?id={{ $item->id }}&club_id={{ $club }}"
                    class="btn btn-danger rounded">O'chirib tashlash</a>
                <a href="/club/edit?id={{ $item->id }}&club_id={{ $club }}"
                    class="btn btn-warning rounded">Tahrirlash</a>
            </div>
        </div>
    @endforeach
</x-admin.index-layout>
