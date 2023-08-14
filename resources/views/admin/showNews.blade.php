<x-admin.index-layout>
    @foreach ($all as $index => $item)
    <div class="card" style="width: 20rem;">
        <div class="card-img-top">
            <div id="carouselExampleIndicators{{ $index }}" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators{{ $index }}" data-slide-to="0"
                        class="{{ $loop->first ? 'active' : '' }}"></li>
                    <li data-target="#carouselExampleIndicators{{ $index }}" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators{{ $index }}" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img style="width:100%;" src="/public/storage/images/{{ $item->file_1 }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img style="width:100%;" src="/public/storage/images/{{ $item->file_2 }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img style="width:100%;" src="/public/storage/images/{{ $item->file_3 }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img style="width:100%;" src="/public/storage/images/{{ $item->file_4 }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img style="width:100%;" src="/public/storage/images/{{ $item->file_5 }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img style="width:100%;" src="/public/storage/images/{{ $item->file_6 }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img style="width:100%;" src="/public/storage/images/{{ $item->file_7 }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img style="width:100%;" src="/public/storage/images/{{ $item->file_8 }}" alt="Third slide">
                    </div>
                    <!-- Add more carousel-items for additional images -->
                </div>
                <div class="carousel-item">
                    <img style="width:100%;" src="/public/storage/images/{{ $item->file_9 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img style="width:100%;" src="/public/storage/images/{{ $item->file_10 }}" alt="Third slide">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators{{ $index }}" role="button"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators{{ $index }}" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text">{{ $item->desc }}</p>
            <a href="/news/delete?id={{ $item->id }}" class="btn btn-danger rounded">O'chirib tashlash</a>
        </div>
    </div>
    @endforeach
</x-admin.index-layout>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<!-- src="/storage/images/{{ $item->file_2 }}" -->