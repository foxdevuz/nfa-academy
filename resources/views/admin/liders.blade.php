<x-admin.index-layout>
    <p class="text-center">Raxbariyat a'zolarini qo'shish</p>
    <form action="/addLider" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name" class="form-label">Raxbariyat a'zosi ismi</label>
        <input type="text" name="name" id="name" placeholder="Raxbar ismi" required autocomplete="off" class="form-control">

        <label for="birthday" class="form-label mt-5">Raxbariyat a'zosi tug'ilgan kuni</label>
        <input type="text" name="birthday" id="birthday" placeholder="Raxbar tug'ilgan kuni" required autocomplete="off" class="form-control">

        <label for="rank" class="form-label mt-5">Raxbariyatdagi lavozimi</label>
        <input type="text" name="rank" id="rank" placeholder="Raxbar lavozimi" required autocomplete="off" class="form-control">

        <label for="bg" class="form-label mt-5">Rasm</label>
        <input type="file" name="file" id="bg" required class="form-control">
        <button class="btn btn-primary rounded mt-5">Joylash</button>
    </form>
</x-admin.index-layout>
