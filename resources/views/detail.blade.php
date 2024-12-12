@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card mb-3">
                <div class="card-body">
                    <img src="{{asset('storage/images/pesanan/'.$data->image)}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="card mb-4">

                <div class="card-body">
                    <table class="table table-hover">

                        <tbody>
                            <tr>
                                <th>
                                    Nama pemesan
                                </th>
                                <td>{{$data->nama_customer}}</td>
                            </tr>
                            <tr>
                                <th>
                                    Berat
                                </th>
                                <td>{{$data->berat}}.Kg</td>
                            </tr>
                            <tr>
                                <th>
                                    Tanggal Masukk
                                </th>
                                <td>{{$data->tanggal_masuk}}</td>
                            </tr>
                            <tr>
                                <th>
                                    Harga
                                </th>
                                <td>Rp.{{ number_format($data->harga_total) }}</td>
                            </tr>
                            <tr>
                                <th>
                                    Kondisi
                                </th>
                                <td>{{$data->status}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <a href="{{route('laundry')}}" class="btn btn-danger">Back</a>

</div>


@endsection