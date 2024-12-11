<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@foreach ($data as $laundry)
    <div>
        <img src="{{asset('storage/images/pesanan' .$laundry->image) }}" style="width: 100px;" alt="">
    </div>
@endforeach

</body>
</html>