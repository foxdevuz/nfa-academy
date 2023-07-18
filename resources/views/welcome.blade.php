<x-main.main>
    <x-main.club-main :news="$clubMain" :event="$event"/>
    <x-extra.main-extra.short-news :shortNews="$news"/>
    @foreach ($famous as $item)
        <x-main.famous-players :famous="$item"/>
    @endforeach
    @if ($birthday)
        <x-extra.birthday :birthday="$birthday"/>
    @endif
    <x-extra.partner/>
</x-main.main>
