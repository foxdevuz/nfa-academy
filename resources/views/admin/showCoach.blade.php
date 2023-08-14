<x-admin.index-layout>
    @foreach ($coach as $item)
        <div class="card" style="width: 19rem; display:inline-block; margin: 0 1.2rem 1rem 1.2rem;">
            <img class="card-img-top" src="/public/storage/images/{{ $item->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <h6 class="card-body">Tug'ilgan kuni: {{ $item->birthday }}</h6>
                <h6 class="card-body">Lavozimi: {{ $item->rank }}</h6>
                <a href="/coach-all/delete?id={{ $item->id }}" class="btn btn-danger rounded">O'chirib tashlash</a>
                <a href="/admin/coach/{{ $item->id }}" class="btn btn-warning rounded">Tahrirlash</a>
            </div>
        </div>
    @endforeach
</x-admin.index-layout>
