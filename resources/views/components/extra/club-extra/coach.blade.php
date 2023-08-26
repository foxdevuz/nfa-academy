@props(['coach'])
<div class="col-lg-4 col-md-6">
    <div class="team-item">
        <div class="position-relative" style="cursor: pointer;">
            <img style="height: 130px; width: 130px; filter: blur(0); border-radius:50%;" src="/storage/images/{{ $coach->image }}" alt="">
            <div class="team-overlay position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
            </div>
        </div>
        <div class="border-inner text-center p-4 " style="text-align:center">
            <h4 class="text-uppercase" style="color: blue">{{ $coach->name }}</h4>
        </div>
    </div>
</div>
