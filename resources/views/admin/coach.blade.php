<x-admin.index-layout>
    <p class="text-center">Trenerlarimiz ro'yxatini yangilash</p>
    <form action="/addCoach" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name" class="form-label">Murabbiy ismi</label>
        <input type="text" name="name" id="name" placeholder="Murabbiyning ismi" required autocomplete="off" class="form-control">

        <label for="birthday" class="form-label mt-5">Tug'ilgan kuni</label>
        <input type="text" name="birthday" id="birthday" placeholder="Murabbiyning tug'ilgan kuni" required autocomplete="off" class="form-control">

        <label for="bg" class="form-label mt-5">Rasm</label>
        <input type="file" name="file" id="bg" required class="form-control">
        <button class="btn btn-primary rounded mt-5">Joylash</button>
    </form>
</x-admin.index-layout>
