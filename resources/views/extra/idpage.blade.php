<x-main.main>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-1">
                <div class="col-lg-4 col-md-4" style="width: 80%; height: 10%; margin: auto;">
                    <div class="team-item">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="position-relative overflow-hidden">
                                        <img class="w-100" style="height: 700px; filter: blur(0);"
                                            src="/public/storage/images/{{ $news->file_1 }}" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="position-relative overflow-hidden">
                                        <img class="w-100" style="height: 700px; filter: blur(0);"
                                            src="/public/storage/images/{{ $news->file_2 }}" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="position-relative overflow-hidden">
                                        <img class="w-100" style="height: 700px; filter: blur(0);"
                                            src="/public/storage/images/{{ $news->file_3 }}" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="position-relative overflow-hidden">
                                        <img class="w-100" style="height: 700px; filter: blur(0);"
                                            src="/public/storage/images/{{ $news->file_4 }}" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="position-relative overflow-hidden">
                                        <img class="w-100" style="height: 700px; filter: blur(0);"
                                            src="/public/storage/images/{{ $news->file_5 }}" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="position-relative overflow-hidden">
                                        <img class="w-100" style="height: 700px; filter: blur(0);"
                                            src="/public/storage/images/{{ $news->file_6 }}" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="position-relative overflow-hidden">
                                        <img class="w-100" style="height: 700px; filter: blur(0);"
                                            src="/public/storage/images/{{ $news->file_7 }}" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="position-relative overflow-hidden">
                                        <img class="w-100" style="height: 700px; filter: blur(0);"
                                            src="/public/storage/images/{{ $news->file_8 }}" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="position-relative overflow-hidden">
                                        <img class="w-100" style="height: 700px; filter: blur(0);"
                                            src="/public/storage/images/{{ $news->file_9 }}" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="position-relative overflow-hidden">
                                        <img class="w-100" style="height: 700px; filter: blur(0);"
                                            src="/public/storage/images/{{ $news->file_10 }}" alt="">
                                    </div>
                                </div>
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
                            <h4 class="text-uppercase text-primary">{{ $news->name }}</h4>
                            <p class="text-white m-0">{{ $news->desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main.main>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integ
    rity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
