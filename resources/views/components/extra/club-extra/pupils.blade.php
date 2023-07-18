@props(['student'])
<div class="col-lg-6">
    <div class="d-flex h-100">
        <div class="flex-shrink-0 box">
            <img
                class="img-fluid" src="/storage/images/{{ $student->image }}"
                alt=""
                style="width: 150px; height: 160px; object-fit: cover;"
            />
        </div>
        <div
            class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
            <h5 class="text-uppercase">Malumotlar</h5>
            <span>{{ $student->name }}</span>
            <span>Tug'ulgan kuni: {{ $student->birthday }}</span>
        </div>
    </div>
</div>
