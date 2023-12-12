@props(['news'])
<a class="col-lg-6" href="/news?id={{ $news->id }}">
    <div class="col-lg-10">
        <div class="d-flex h-100">
            <div class="flex-shrink-0 box">
                <img class="img-fluid" src="{{ asset("/storage/images/" . $news->file_1)  }}" alt=""
                    style="width: 150px; height: 85px; object-fit: cover" />
            </div>
            <div class="d-flex flex-column justify-content-center text-start bg-secondary px-4">
                <h5 class="text-uppercase">{{ Str::limit($news->name, 35, '...') }}</h5>
                <span>
                    {{ Str::limit($news->desc, 20, '...') }}
                </span>
            </div>
        </div>
    </div>
</a>
