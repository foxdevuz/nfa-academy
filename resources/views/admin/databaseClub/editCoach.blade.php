<x-admin.index-layout>
    <p class="text-center fs-4 text-capitalize">Tahrirash | Murabbiylar {{ $club }}</p>
    <form action="/admin/edit-coach/{{ $id }}/{{ $club }}" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="name" class="form-label">Ismi</label>
        <input type="text" name="name" id="name" class="form-control rounded" required placeholder="Ismini kiriting" value="{{ $data->name }}">
    
        <label for="birthday" class="form-label mt-3">Tug'ilgan kuni</label>
        <input type="text" name="birthday" id="birthday" class="form-control rounded" required placeholder="Tug'ilgan kunni kiriting" value="{{ $data->birthday }}">

        <label for="image" class="form-label mt-3">Rasmi</label>
        <input type="file" name="image" id="image" class="form-control rounded">
        
        <button type="submit" class="btn btn-primary mt-4 rounded">Saqlash</button>
    </form>
</x-admin.index-layout>
