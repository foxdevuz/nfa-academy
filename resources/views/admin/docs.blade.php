<x-admin.index-layout>
    <p class="text-center">Shifokorlar ro'yxatini yangilash</p>
    <form action="/addDoc" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name" class="form-label">Shifokor ismi</label>
        <input type="text" name="name" id="name" placeholder="Shifokorning ismi" required autocomplete="off" class="form-control">

        <label for="birthday" class="form-label mt-5">Tug'ilgan kuni</label>
        <input type="text" name="birthday" id="birthday" placeholder="Shifokorning tug'ilgan kuni" required autocomplete="off" class="form-control">

        <label for="bg" class="form-label mt-5">Rasm</label>
        <input type="file" name="file" id="bg" required class="form-control">
        <button class="btn btn-primary rounded mt-5">Joylash</button>
    </form>
</x-admin.index-layout>
