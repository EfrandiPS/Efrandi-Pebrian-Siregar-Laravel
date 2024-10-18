
<x-app>
    <x-slot:judul>Daftar Pemain Film</x-slot:judul>
    <form action="{{ route('casts.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by name" aria-label="Search">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </form>
    <h1>Daftar Pemain Film</h1>
    <a href="{{ route('casts.create') }}" class="btn btn-primary">Nambah Actor</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($casts as $cast)
                <tr>
                    <td>{{ $cast->nama }}</td>
                    <td>{{ $cast->umur }}</td>
                    <td>{{ $cast->bio }}</td>
                    <td>
                        <a href="{{ route('casts.edit', $cast->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('casts.destroy', $cast->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>
