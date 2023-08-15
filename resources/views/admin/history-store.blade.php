<x-admin.index-layout>
    <form action="/addHistory" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title" class="form-label">Tarix uchun qisqacha sarlavha</label>
        <input type="text" name="title" id="title" placeholder="Tarix uchun qisqacha sarlavha" required autocomplete="off" class="form-control">

        <label for="text" class="form-label mt-5">Tahix uchun matn</label>
        <textarea name="text" id="text" cols="30" rows="10" class="form-control" placeholder="Tahix uchun matn" required></textarea>

        <label for="image" class="form-label mt-5">Rasm</label>
        <input type="file" name="image" id="image" class="form-control" required>

        <button class="btn btn-primary rounded mt-5">Joylash</button>
    </form>
</x-admin.index-layout>
