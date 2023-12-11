<div class="container-fluid bg-dark bg-imga text-secondary" style="margin-top: 235px">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 mt-lg-n5">
                <div
                    class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary border-inner p-4">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1127.1762175064925!2d71.58925281270938!3d41.0027005765373!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1692783878541!5m2!1sen!2s" width="300" height="400" style="border:0; margin:auto;" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <h4 class="text-primary text-uppercase mb-4">{{ @trans('footer.contact') }}</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <span>{{ @trans('footer.location') }}</span>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <span>namangan1fmm@minsport.uz</span>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <a href="tel:+998 69-224-86-75" style="color: #ffffff;">+998 69-224-86-75</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-primary text-uppercase mb-4">{{ @trans('footer.site_map') }}</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="/">
                                <i class="bi bi-arrow-right text-primary me-2"></i>
                                {{ @trans('header.main') }}
                            </a>
                            <a class="text-secondary mb-2" href="/breaking-news">
                                <i class="bi bi-arrow-right text-primary me-2"></i>{{ @trans('header.news') }}
                            </a>
                            <a class="text-secondary mb-2" href="/club/type?id=u11">
                                <i class="bi bi-arrow-right text-primary me-2"></i>
                                {{ @trans('header.teams') }}
                            </a>
                            <a class="text-secondary mb-2" href="/club/history"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>
                                {{ @trans('header.history') }}
                            </a>
                            <a class="text-secondary mb-2" href="/club/liders">
                                <i class="bi bi-arrow-right text-primary me-2"></i>
                                {{ @trans('header.headquarter') }}
                            </a>
                            <a class="text-secondary mb-2" href="/contact">
                                <i class="bi bi-arrow-right text-primary me-2"></i>{{ @trans('header.contact') }}
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
