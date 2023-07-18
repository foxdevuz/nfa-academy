@props(['lider'])
<div class="col-lg-4 col-md-6">
    <div class="team-item">
        <div class="position-relative overflow-hidden">
            <img class="img-fluid w-100" style="height: 425px; object-fit: cover; filter: blur(0);"
                src="/storage/images/{{ $lider->image }}" alt="">
            <div
                class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
            </div>
        </div>
        <div class="bg-dark border-inner text-center p-4">
            <h4 class="text-uppercase text-primary">{{ $lider->name }}</h4>
            <p class="text-white m-0">{{ $lider->rank }}</p>
        </div>
    </div>
</div>
