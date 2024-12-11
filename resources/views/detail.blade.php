@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Nama pemesan</th>
                                <td>{{$data->nama_customer  }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{asset('storage/images/pesanan/'.$data->image)}}" class="img-thumbnail" alt="">
                </div>
            </div>
        </div>
    </div>
    <form action="{{route('laundry')}}">
        <div class="btn btn-danger">
                Back
            </div>
    </form>

</div>


@endsection