<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-light">
    <main class="container">
        @if (Session::has('success'))
            <div class="pt-3">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="pt-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <!-- START DATA -->
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                    <form class="d-flex" action="#" method="get">
                        <input class="form-control me-1" type="search" name="katakunci"
                            value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci"
                            aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Cari</button>
                    </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                    <a href='#' class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Title</th>
                            <th class="col-md-4">Slug</th>
                            <th class="col-md-2">Desc</th>
                            <th class="col-md-2">Image</th>
                            <th class="col-md-2">views</th>
                            <th class="col-md-2">Publish Date</th>
                            <th class="col-md-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>3 Juara Masa Lalu Tersingkir di Fase Grup Liga Champions Musim Ini</td>
                                <td>3-juara-masa-lalu-tersingkir-di-fase-grup-liga-champions-musim-ini</td>
                                <td><textarea rows="4" cols="50" readonly>Fase grup Liga Champions musim ini terbilang ketat dan keras. Sampai matchday kelima, sudah ada tiga tim yang pernah merasakan gelar juara turnamen ini yang gagal melaju ke babak 16 besar.Red Star Belgrade adalah juara Liga Champions atau European Cup musim 1990/1991. Di Liga Champions kali ini, mereka tidak bisa bersaing dengan Manchester City, RB Leipzig, dan Young Boys di grup H.
                                </textarea>    
                                </td>
                                    <td>feyenoord_169.jpeg</td>
                                    <td>3</td>
                                    <td>2023-12-01</td>
                                    <td>
                                    {{-- <a href='{{ url('mahasiswa/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a> --}}
                                    <a href='#' class="btn btn-warning btn-sm">Edit</a>
                                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline'
                                        action="#" method="post">
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                    </form>
                                </td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
                {{-- {{ $data->withQueryString()->links() }} --}}
            </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
