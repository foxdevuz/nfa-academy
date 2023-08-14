<x-admin.index-layout>
    <form action="/addNews" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title" class="form-label">Yangilik mavzusi</label>
        <input type="text" name="title" id="title" placeholder="Xabar mavzusi" required autocomplete="off" class="form-control">

        <label for="text" class="form-label mt-5">Yangilik matni</label>
        <textarea name="text" id="text" cols="30" rows="10" class="form-control" placeholder="Yangilik matnini kiriting" required></textarea>

        <label for="bg" class="form-label mt-5">Yangilik uchun media tanlang</label>
        <input type="file" name="file_1" id="bg" required class="form-control">
        <input type="file" name="file_2" class="form-control mt-3">
        <input type="file" name="file_3" class="form-control mt-3">
        <input type="file" name="file_4" class="form-control mt-3">
        <input type="file" name="file_5" class="form-control mt-3">
        <input type="file" name="file_6" class="form-control mt-3">
        <input type="file" name="file_7" class="form-control mt-3">
        <input type="file" name="file_8" class="form-control mt-3">
        <input type="file" name="file_9" class="form-control mt-3">
        <input type="file" name="file_10" class="form-control mt-3">

        <button class="btn btn-primary rounded mt-5">Joylash</button>
    </form>
</x-admin.index-layout>
