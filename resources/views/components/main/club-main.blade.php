@props(['news', 'event'])
<div class="container-fluid bg-dark py-5 hero-header" style="background-image: url('/public/storage/images/{{ $news[0]->file }}'); position:relative;">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="text-primary mb-4">Namangan Futbol Akademiyasi </h1>
                <h1 class="text-uppercase text-white">
                {{ $news[0]->title }}
                </h1>
            </div>
        </div>
        @if ($event)
            <button class="event-btn">{{ $event->event }} | {{ $event->time }}</button>
        @endif
    </div>
</div>
