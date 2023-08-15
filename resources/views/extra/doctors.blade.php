<x-main.main>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px">
                <h2 class="text-primary font-secondary">Our doctor in our team</h2>
                <h1 class="display-4 text-uppercase">Shifokorlar</h1>
            </div>
            <div class="row g-5">
                @foreach ($doctors as $doctor)
                    <x-extra.club-extra.doctor-card :doc="$doctor"/>
                @endforeach
            </div>
        </div>
    </div>
</x-main.main>
