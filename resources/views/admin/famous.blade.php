<x-admin.index-layout>
    <p class="text-center">Klub farxi ro'yxatini yangilash</p>
    <form action="/addFamous" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name" class="form-label">Ismi</label>
        <input type="text" name="name" id="name" placeholder="Ismi" required autocomplete="off" class="form-control">

        <label for="birthday" class="form-label mt-5">Tug'ilgan kuni</label>
        <input type="text" name="birthday" id="birthday" placeholder="Tug'ilgan kuni" required autocomplete="off" class="form-control">

        <label for="about" class="form-label mt-5">Qisacha ma'lumot</label>
        <input type="text" name="about" id="about" placeholder="Qisqacha ma'lumot" required autocomplete="off" class="form-control">

        <label for="bg" class="form-label mt-5">Rasm</label>
        <input type="file" name="file" id="bg" required class="form-control">
        <button class="btn btn-primary rounded mt-5">Joylash</button>
    </form>
</x-admin.index-layout>
