@extends('template.template')

@section('content')

<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
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

        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
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
                                    <form action="{{route('detail-laundry', $laundry->id)}}" style="margin-bottom: 6px;">
                                        <button class="btn btn-success" style="width: 100px;">
                                            Detail
                                        </button>
                                    </form>


                                    <form action="{{route('hapus-laundry', $laundry->id)}}" method="post">
                                        @csrf
                                        {{method_field('delete')}}
                                        <button type="submit" class="btn btn-danger" style="width: 100px;">Hapus</button>
                                    </form>

                                </td>

                            </tr>
                            @endforeach


                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection