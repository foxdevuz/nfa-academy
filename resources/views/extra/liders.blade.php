<x-main.main>
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">{{ @trans('extras.headquarter') }}</h1>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">{{ @trans('extras.headquarter') }}</h2>
                <h1 class="display-4 text-uppercase">{{ @trans('extras.sub_headquarter') }}</h1>
            </div>
            <div class="row g-5">
                @foreach ($liders as $lider)
                    <x-extra.club-extra.liders :lider="$lider"/>
                @endforeach
            </div>
        </div>
    </div>
</x-main.main>
