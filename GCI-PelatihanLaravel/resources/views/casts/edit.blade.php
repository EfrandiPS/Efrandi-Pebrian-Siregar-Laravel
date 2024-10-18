
<x-app>
    <x-slot:judul>Edit Actor Film</x-slot:judul>
    
    <form action="{{ route('casts.update', $cast->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama', $cast->nama) }}" required>
        </div>
        <div>
            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" value="{{ old('umur', $cast->umur) }}" required>
        </div>
        <div>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio">{{ old('bio', $cast->bio) }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
</x-app>
