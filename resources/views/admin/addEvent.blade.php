<x-admin.index-layout>            
    <form action="/addEvent" method="post" enctype="multipart/form-data">
        @csrf
        <label for="event" class="form-label">Voqea qo'shish</label>
        <input type="file" name="event" id="event" placeholder="Voqea nomi" required autocomplete="off"
            class="form-control">

        <label for="time" class="form-label mt-5">Bo'ladigan vaqt</label>
        <input type="text" name="time" id="time" placeholder="Bo'ladigan voqea vaqti" required
            autocomplete="off" class="form-control">

        <button class="btn btn-primary rounded mt-5" type="submit">Joylash</button>
    </form>
</x-admin.index-layout>
