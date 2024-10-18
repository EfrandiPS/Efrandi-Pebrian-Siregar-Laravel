<x-app>
    <x-slot:judul>Menambahkan Actor Film</x-slot:judul>
    
    <form action="{{ route('casts.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" required>
        </div>
        <div>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio"></textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
</x-app>
