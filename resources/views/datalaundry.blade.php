<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="mesin-cuci.png">
    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid shadow-sm">
            <h4 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Data</h4>
        </div>
    </nav>


    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Berat</th>
                        <th>Tanggal Masuk</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $laundry)
                    <tr>
                        <th scope="row">{{ $laundry->id }}</th>
                        <td>{{ $laundry->nama_customer }}</td>
                        <td>{{ $laundry->berat }}.Kg</td>
                        <td>{{ $laundry->tanggal_masuk }}</td>
                        <td>Rp. {{ number_format($laundry->harga_total) }}</td>
                        <td>{{ $laundry->status }}</td>
                        <td>
                            <form action="{{route('detail-laundry')}}">
                                <button>
                                    Detail
                                </button>
                            </form>
                            

                            <form action="{{route('hapus-laundry', $laundry->id)}}" method="post">
                                @csrf
                                {{method_field('delete')}}
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>

                        </td>

                    </tr>
                    @endforeach


                </tbody>

            </table>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Siapa Nih Yang Laundry??</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('kirim-laundry')}}" enctype="multipart/form-data">
                            @csrf
                            <!-- {{method_field('PUT')}} -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label>Nama Customer</label>
                                            <input type="text" name="nama_customer" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Berat Pakaian</label>
                                            <input type="number" name="berat" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="image" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label>Tanggal Masuk</label>
                                        <input type="date" name="tanggal_masuk" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-secondary" style="width: 90%; margin-bottom: 20px; margin-left: 25px;">Gaskeun</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>


</body>

</html>