@props(['news'])
<div class="col-lg-4 col-md-4">
    <div class="team-item">
        <div class="position-relative overflow-hidden" style="width: 100%; object-fit: cover; height:250px;">
            <a href="/news?id={{ $news->id }}">
                <img class="img-fluid w-100" style="filter: blur(0);"
                    src="/storage/images/{{ $news->file_1 }}"
                    alt="">
            </a>
        </div>
        <a href="/news?id={{ $news->id }}">
            <div class="bg-dark text-center p-4">
                <h4 class="text-uppercase text-primary text-left">{{ Str::limit($news->name, 25, '...') }}</h4>
                <p class="text-white m-0">{{ Str::limit($news->desc, 50, '...') }}</p>
            </div>
        </a>
    </div>
</div>
