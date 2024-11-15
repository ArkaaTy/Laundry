<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center mt-3">Data Laundry</h1>

    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                     <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Berat</th>
                        <th>Tanggal Masuk</th>  
                        <th>Harga Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        
                     </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Agus</td>
                    <td>2.8 Kg</td>
                    <td>12/12/24</td>
                    <td>15.000</td>
                    <td>diproses</td>
                    <td>
                        <button type="button" class="btn btn-info">Detail</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </td>

                    </tr>


                </tbody>
               
            </table>
            <button type="button" class="btn btn-success">Tambah Data</button>
        </div>
        
    </div>
</body>
</html>