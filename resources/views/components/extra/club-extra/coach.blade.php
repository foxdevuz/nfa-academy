@props(['coach'])
<div class="col-lg-4 col-md-6">
    <div class="team-item" style="justify-content: center;">
        <div class="position-relative overflow-hidden">
            <img class="img-fluid w-100"
                style="height: 425px; object-fit: cover;filter: blur(0);" src="/public/storage/images/{{ $coach->image }}" alt="">
        </div>
        <div class="bg-dark border-inner text-center p-4">
            <h4 class="text-uppercase text-primary">{{ $coach->name }}</h4>
        </div>
    </div>
</div>
