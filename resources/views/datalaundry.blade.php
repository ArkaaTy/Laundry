
@extends('template.template')

@section('content')

<div class="container has-sidebar-left has-sidebar-tabs" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-7">
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
                            <button type="submit" class="btn btn-secondary" style="width: 50%; margin-bottom: 20px; margin-left: 25px;">Gaskeun</button>
                            <button type="submit" class="btn btn-secondary" style="width: 50%; margin-bottom: 20px; margin-left: 25px;">Gaskeun</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>



@endsection