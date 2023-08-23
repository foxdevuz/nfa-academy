<x-main.main>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Our Coaches</h2>
                <h1 class="display-4 text-uppercase">Treynerlarimiz</h1>
            </div>
            <div class="row g-5">
                @foreach ($coaches as $coach)
                    <x-extra.club-extra.coach-card :coach="$coach"/>
                @endforeach
            </div>
        </div>
    </div>
</x-main.main>
