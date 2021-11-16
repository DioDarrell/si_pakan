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
        <h5>Laporan Produk Pakan</h4></h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>
                    No.
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Jumlah
                </th>
                <th>
                    Harga
                </th>
        </thead>
        <tbody>
            @foreach($products as $b)
            <tr>
                <td>
                    {{ $b->id }}
                </td>
                <td>
                    {{ $b->name }}
                </td>
                <td>
                    {{ $b->stocks }}
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