<x-main.main>
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px">
                <h2 class="text-primary font-secondary">Jamoalar</h2>
            </div>
            <div class="tab-class text-center">
                <div class="container-fluid py-5">
                    <div class="container">
                        <div class="row g-5" style="justify-content: space-around ;">
                            @foreach ($coach as $item)
                                <x-extra.club-extra.coach :coach="$item"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="cosd">
                <div class="tab-class text-center">

                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-3">
                                @foreach ($club as $item)
                                    <x-extra.club-extra.pupils :student="$item"/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main.main>
