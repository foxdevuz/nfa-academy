@props(['lider'])
<div class="col-lg-4 col-md-6">
    <div class="team-item">
        <div class="position-relative" style="cursor: pointer;">
            <img  style="height: 150px; width: 150px; filter: blur(0); border-radius:50%; margin-left:6pc"
                src="/public/storage/images/{{ $lider->image }}" alt="">
            <div
                class="team-overlay position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
            </div>
        </div>
        <div class="border-inner text-center p-4 " style="text-align:center">
            <h4 class="text-uppercase" style="color: blue;">{{ $lider->name }}</h4>
            <p class="text-red-600 m-0" style="color: blue;">{{ $lider->rank }}</p>
        </div>
    </div>
</div>
