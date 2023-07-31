@props(['coach'])
<div class="col-lg-4 col-md-6">
    <div class="team-item">
        <div class="position-relative overflow-hidden">
            <img class="img-fluid w-100" style="filter: blur(0); height: 425px; object-fit: contain;" src="/public/storage/images/{{ $coach->image }}" alt="">
            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
            </div>
        </div>
        <div class="bg-dark border-inner text-center p-4">
            <h4 class="text-uppercase text-primary">{{ $coach->name }}</h4>
        </div>
    </div>
</div>
