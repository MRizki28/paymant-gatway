<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <div class="container">
        <h2 class="my-1">Toko Durian</h2>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/img/durian.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Durian Lokal</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <form action="/checkout" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mau pesan berapa</label>
                        <input type="number" class="form-control" id="qty" name="qty"
                            placeholder="Jumlah pesanan">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama pelanggan</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Nama Pelanggan">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No telp</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            placeholder="Masukan No telp">
                    </div>
                   
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Check out</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
