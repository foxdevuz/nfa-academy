<x-main.main>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">{{ @trans('main.news') }}</h2>
                <h1 class="display-4 text-uppercase">{{ @trans('main.sub_news_title') }}</h1>
            </div>
            <div class="row g-5">
                @foreach ($news as $newsItem)
                    <x-extra.news-extra.breaking-news :news="$newsItem"/>
                @endforeach
                {{ $news->links() }}
            </div>
        </div>
    </div>
</x-main.main>
