{{-- {{ dd($clubMain, $news) }} --}}
<x-main.main>
    <x-main.club-main :news="$clubMain"/>
    <x-extra.main-extra.short-news :shortNews="$news"/>
    <x-main.famous-players/>
    <x-extra.birthday/>
    <x-extra.partner/>
</x-main.main>
