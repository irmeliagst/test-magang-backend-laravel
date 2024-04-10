<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Ikon Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10"> <!-- Mengubah lebar kolom menjadi lebih besar -->
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="col-md-12">
                            <a href="{{ route('welcome.index') }}" class="btn btn-md btn-dark"><i class="bi bi-arrow-left"></i></a> <!-- Menggunakan ikon back -->
                        </div>
                        <img src="{{ asset('storage/'.$buku->cover) }}" class="rounded mx-auto d-block img-fluid" style="width: 300px; height: 400px;"> <!-- Menyesuaikan ukuran gambar dan menempatkannya di tengah -->
                        <hr>
                        <h4 class="font-weight-bold" style="font-size: 24px;">{{ $buku->title }}</h4> <!-- Menjadikan teks judul lebih besar dan tebal -->
                        <p class="tmt-3">
                            {!! $buku->content !!}
                        </p>
                        <h2 class="card-title"> {{ $buku->judul }}</h2>
                        <p class="card-text"><strong>Author:</strong> {{ $buku->author }}</p>
                        <p class="card-text"><strong>Status:</strong> {{ $buku->status }}</p>
                        <p class="card-text"><strong>Tanggal Upload:</strong> {{ $buku->tanggal_upload }}</p>
                        <p class="card-text"><strong>Deskripsi:</strong> {{ $buku->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
