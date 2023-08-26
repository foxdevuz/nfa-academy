<x-main.main>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-1">
                <div class="col-lg-4 col-md-4" style="width: 80%; height: 10%; margin: auto;">
                    <div class="team-item">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="/public/storage/images/{{ $news[0]->file_1 }}" class="d-block w-100" alt="News image">
                              </div>
                              @if ($news[0]->file_2 !== null)
                                <div class="carousel-item">
                                    <img src="/public/storage/images/{{ $news[0]->file_2 }}" class="d-block w-100" alt="News image">
                                </div>
                              @endif
                              @if ($news[0]->file_3 !== null)
                                <div class="carousel-item">
                                    <img src="/public/storage/images/{{ $news[0]->file_3 }}" class="d-block w-100" alt="News image">
                                </div>                             
                              @endif
                              @if ($news[0]->file_4 !== null)
                                <div class="carousel-item">
                                    <img src="/public/storage/images/{{ $news[0]->file_4 }}" class="d-block w-100" alt="News image">
                                </div>                             
                              @endif
                              @if ($news[0]->file_5 !== null)
                                <div class="carousel-item">
                                    <img src="/public/storage/images/{{ $news[0]->file_5 }}" class="d-block w-100" alt="News image">
                                </div>                             
                              @endif
                              @if ($news[0]->file_6 !== null)
                                <div class="carousel-item">
                                    <img src="/public/storage/images/{{ $news[0]->file_6 }}" class="d-block w-100" alt="News image">
                                </div>                             
                              @endif
                              @if ($news[0]->file_7 !== null)
                                <div class="carousel-item">
                                    <img src="/public/storage/images/{{ $news[0]->file_7 }}" class="d-block w-100" alt="News image">
                                </div>                             
                              @endif
                              @if ($news[0]->file_8 !== null)
                                <div class="carousel-item">
                                    <img src="/public/storage/images/{{ $news[0]->file_8 }}" class="d-block w-100" alt="News image">
                                </div>                             
                              @endif
                              @if ($news[0]->file_9 !== null)
                                <div class="carousel-item">
                                    <img src="/public/storage/images/{{ $news[0]->file_9 }}" class="d-block w-100" alt="News image">
                                </div>                             
                              @endif
                              @if ($news[0]->file_10 !== null)
                                <div class="carousel-item">
                                    <img src="/public/storage/images/{{ $news[0]->file_10 }}" class="d-block w-100" alt="News image">
                                </div>                             
                              @endif
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                        <div class="bg-dark text-center p-4">
                            <h4 class="text-uppercase text-primary">{{ $news[0]->name }}</h4>
                            <p class="text-white m-0">{!! $news[0]->desc !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main.main>
