<x-admin.index-layout>
    @if ($editType && $data)
        <p class="text-center text-warning fa-2x">Tahrirlash</p>

        <form action="/admin/edit/{{ $editType }}/{{ $data->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name" class="form-label">Ismni tahrirlash</label>
            <input type="text" name="name" id="name" placeholder="Ism kiriting" class="form-control rounded" required>

            <label for="birthday" class="form-label mt-5">Tug'ilgan kunni tahrirlash</label>
            <input type="text" name="birthday" id="birthday" placeholder="Tug'ilgan kiriting" class="form-control rounded" required>

            @if ($editType == 'liders')
                <label for="rank" class="form-label mt-5">Lavozimini tahrirlash</label>
                <input type="text" name="rank" id="rank" placeholder="Lavozimni tahrirlash" class="form-control rounded">
            @endif


            <label for="image" class="form-label mt-5">Rasm (Majburiy emas)</label>
            <input type="file" name="image" id="image" placeholder="Tug'ilgan kiriting" class="form-control rounded">

            <button type="submit" class="btn btn-primary rounded mt-5">Tahrirlash</button>
        </form>
    @endif
</x-admin.index-layout>
