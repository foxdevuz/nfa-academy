<x-main.main>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-1">
                <div class="col-lg-4 col-md-4" style="width: 80%; height: 10%; margin: auto;">
                    <div class="team-item">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @for ($i = 1; $i <= 10; $i++)
                                    @if ($news[0]->{"file_$i"} !== null)
                                        <div class="carousel-item{{ $i === 1 ? ' active' : '' }}">
                                            <div class="position-relative overflow-hidden">
                                                <img class="w-100" style="filter: blur(0);"
                                                    src="/public/storage/images/{{ $news[0]->{"file_$i"} }}" alt="">
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="bg-dark text-center p-4">
                            <h4 class="text-uppercase text-primary">{{ $news[0]->name }}</h4>
                            <p class="text-white m-0">{{ $news[0]->desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main.main>
