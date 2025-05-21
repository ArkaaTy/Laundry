@extends('template.template')

@section('content')

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
                    <div>
                        <a href="{{route('laundry')}}" class="">
                            <button class="btn btn-primary btn-lg">
                                Tambah Data
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection