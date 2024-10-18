
<x-app>
    <x-slot:judul>Detail Actor Film</x-slot:judul>
    
    <div>
        <h1>{{ $cast->nama }}</h1>
        <p><strong>Umur:</strong> {{ $cast->umur }}</p>
        <p><strong>Bio:</strong> {{ $cast->bio ?? 'Tidak ada deskripsi.' }}</p>
    </div>
    <a href="{{ route('index') }}">Kembali ke daftar pemain film</a>
    <button onclick="window.location='{{ route('casts.edit', ['cast_id' => $cast->id]) }}'" class="btn btn-primary">
        Edit
    </button>

</x-app>
