<x-main.main>
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Aloqa uchun</h1>

            </div>
        </div>
    </div>
    <div class="container-fluid contact position-relative px-5" style="margin-top: 90px;">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-geo-alt fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Bizning office</h6>
                        <span>Namangan shahar Davlatabod tumani <br> 1-kichik noxiya mustaqillik MFY <br>Navbahor
                            ko'cha 15-uy</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-envelope-open fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Bizning email </h6>
                        <span>namangan1fmm@minsport.uz</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-phone-vibrate fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Biz bilan bog'lanish</h6>
                        <a href="tel:+998 69-224-86-75" style="color: #111111;">+998 69-224-86-75</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="/sendMessage" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <input type="text"
                                        class="form-control bg-light border-0 px-4"
                                        placeholder="Ismingiz"
                                        style="height: 55px;"
                                        name="name"
                                        required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email"
                                        class="form-control bg-light border-0 px-4"
                                        placeholder="Sizning emailingiz"
                                        style="height: 55px;"
                                        name="email"
                                        required>
                            </div>
                            <div class="col-sm-12">
                                <input type="text"
                                        class="form-control bg-light border-0 px-4"
                                        placeholder="Mavzu"
                                        style="height: 55px;"
                                        name="theme"
                                        required>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control bg-light border-0 px-4 py-3"
                                            rows="4"
                                            placeholder="Xabar"
                                            name="msg"
                                            required>
                                </textarea>
                            </div>
                            @if (session()->has('error'))
                                <x-extra.messages>{{ session()->get('error') }}</x-extra.messages>
                            @endif
                            @if (session()->has('success'))
                                <x-extra.messages>{{ session()->get('success') }}</x-extra.messages>
                            @endif
                            <div class="col-sm-12">
                                <button class="btn btn-primary border-inner w-100 py-3" type="submit">Xabar yuborish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main.main>
