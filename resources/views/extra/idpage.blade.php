<x-main.main>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-1">
                <div class="col-lg-4 col-md-4" style="width: 80%; height: 10%; margin: auto;">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="w-100" style="height: 700px; filter: blur(0);" src="/storage/images/{{ $news->file }}" alt="">
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
