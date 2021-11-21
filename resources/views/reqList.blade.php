<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Toko Pakan Admin Page</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="black" data-active-color="success">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <!-- <img src="../assets/img/logo-small.png"> -->
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="" class="simple-text logo-normal">
                    Toko Pakan
                    <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="/">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Data Barang</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="/request">
                            <i class="nc-icon nc-caps-small"></i>
                            <p>Request List</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Admin Page</a>
                    </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Request List</h4>
                            </div>
                            <div class="update mr-auto">
                                <a href="/request/cetak_pdf" class="btn btn-primary btn-round btn-success" target="_blank">CETAK PDF</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary text-success">
                                            <th>
                                                Nama
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
                                            <th>
                                                Status
                                            </th>
                                        </thead>
                                        <tbody>
                                            @foreach($requestlist as $b)
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
                                                @if($d->status == 'complete')
                                                <td align="center">
                                                    <p style="background-color: #00C851;color:white">{{$d->status}}</p>
                                                </td>
                                                @endif
                                                @if($d->status == 'pending')
                                                <td align="center">
                                                    <p style="background-color: #616161;color:white">{{$d->status}}</p>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="footer footer-black  footer-white ">
                        <div class="container-fluid">
                            <div class="row">
                                <nav class="footer-nav">
                                    <ul>
                                        <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                                        <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                                        <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                                    </ul>
                                </nav>
                                <div class="credits ml-auto">
                                    <span class="copyright">
                                        © <script>
                                            document.write(new Date().getFullYear())
                                        </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                                    </span>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <!--   Core JS Files   -->
            <script src="../assets/js/core/jquery.min.js"></script>
            <script src="../assets/js/core/popper.min.js"></script>
            <script src="../assets/js/core/bootstrap.min.js"></script>
            <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
            <!--  Google Maps Plugin    -->
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
            <!-- Chart JS -->
            <script src="../assets/js/plugins/chartjs.min.js"></script>
            <!--  Notifications Plugin    -->
            <script src="../assets/js/plugins/bootstrap-notify.js"></script>
            <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
            <script src="../assets/demo/demo.js"></script>
</body>

</html>