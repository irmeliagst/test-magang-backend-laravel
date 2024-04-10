<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Ikon Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Custom CSS untuk responsif */
        .table-responsive {
            overflow-x: auto;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
    </style>
</head>

<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="btn-container"> <!-- Container untuk tombol -->
                            <a href="{{ route('welcome.index') }}" class="btn btn-md btn-dark"><i class="bi bi-arrow-left"></i></a> <!-- Tombol kembali dipindahkan ke luar tabel dan menggunakan ikon -->
                            <a href="{{ route('bukus.create') }}" class="btn btn-md btn-success"><i class="bi bi-plus"></i>Tambah Buku</a>
                        </div>
                        <div class="table-responsive"> <!-- Tabel responsif -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Cover</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Tanggal Upload</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($bukus as $buku)
                                    <tr>
                                        <td>{{ $buku->id }}</td>
                                        <td>
                                            <img src="{{ asset('storage/'.$buku->cover) }}" class="rounded" style="max-width: 150px; height: auto;">
                                        </td>
                                        <td>{{ $buku->author }}</td>
                                        <td>{{ $buku->judul }}</td>
                                        <td>{{ $buku->deskripsi }}</td>
                                        <td>{{ $buku->status }}</td>
                                        <td>{{ $buku->tanggal_upload }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('bukus.destroy', $buku->id) }}" method="POST">
                                                <!-- <a href="{{ route('bukus.show', $buku->id) }}" class="btn btn-sm btn-dark">Show</a> -->
                                                <a href="{{ route('bukus.edit', $buku->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a> <!-- Menggunakan ikon edit -->
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button> <!-- Menggunakan ikon hapus -->
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Data Buku belum tersedia.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
