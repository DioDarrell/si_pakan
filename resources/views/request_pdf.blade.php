<!DOCTYPE html>
<html>

<head>
    <title>Laporan Produk Pakan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Produk Pakan</h4>
        </h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>
                    Nama Customer
                </th>
                <th>
                    Nama Item
                </th>
                <th>
                    Alamat
                </th>
                <th>
                    No.Telepon
                </th>
                <th>
                    Waktu
                </th>
                <th>
                    Berat
                </th>
                <th>
                    Price
                </th>
        </thead>
        <tbody>
            @foreach($requestlists as $b)
            <tr>
                <td>
                    {{ $b->customer_name }}
                </td>
                <td>
                    {{ $b->item_name }}
                </td>
                <td>
                    {{ $b->address }}
                </td>
                <td>
                    {{ $b->phone }}
                </td>
                <td>
                    {{ $b->req_time }}
                </td>
                <td>
                    {{ $b->weight }}
                </td>
                <td>
                    {{ $b->price }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>