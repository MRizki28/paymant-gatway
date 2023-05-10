<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-wMSrDf1bMOIJq1iD"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
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
                <h5 class="card-title">Detail Pesanan</h5>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td> : {{ $order->name }}</td>
                    </tr>
                    <tr>
                        <td>No hp:</td>
                        <td> : {{ $order->phone }}</td>
                    </tr>
                    <tr>
                        <td>Alamat:</td>
                        <td> : {{ $order->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Qty:</td>
                        <td> : {{ $order->qty }}</td>
                    </tr>
                    <tr>
                        <td>Total Harga:</td>
                        <td> : {{ $order->total_price }}</td>
                    </tr>
                </table>
                <button class="btn btn-primary" id="pay-button">Bayar sekarang</button>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    window.location.href = '/invoice/{{ $order->id }}'
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
</body>

</html>
