<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: lightgray;
            padding-top: 20px;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            height: 50px;
            width: 100%;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .container {
            margin-top: 70px;
            margin-bottom: 60px;
        }

        .book-container {
            margin-bottom: 30px;
            text-align: center;
        }

        .card {
            width: 180px;
            margin: auto;
        }

        .card-img-top {
            height: 270px;
            object-fit: cover;
            margin: auto;
        }

        .card-body {
            padding: 10px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Daftar Buku</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                </li>
            </ul>
            <form id="searchForm" class="form-inline my-2 my-lg-0" action="{{ route('books.search') }}" method="GET">
                <input id="searchInput" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            </form>
            <a href="{{ route('books.index') }}" class="btn btn-success ml-2">
                Buku</a>
        </div>
    </nav>

    <!-- Content Container -->
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($books as $book)
            @if ($book->status === 'publish') <!-- Memeriksa status buku -->
            <div class="col-md-2 mb-4 book-container">
                <div class="card">
                    <img src="{{ asset('storage/'.$book->cover) }}" class="card-img-top rounded" alt="Cover
                    Buku">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->judul }}</h5>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-dark">Show</a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>Books App 2024, Ira Amelia Agasta</p>
        </div>
    </footer>

    <!-- JavaScript libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Reset form saat halaman dimuat ulang -->
    <script>
        // Memeriksa apakah ada data pencarian yang disimpan di localStorage
        var searchValue = localStorage.getItem('searchValue');
        if (searchValue) {
            $('#searchInput').val(searchValue); // Memasukkan nilai pencarian ke input
        }

        $(document).ready(function() {
            // Reset form saat halaman dimuat ulang
            $('#searchForm')[0].reset();

            // Mengembalikan nilai pencarian dari localStorage saat form disubmit
            $('#searchForm').submit(function() {
                var searchValue = $('#searchInput').val();
                localStorage.setItem('searchValue', searchValue);
            });
        });
    </script>
</body>

</html>