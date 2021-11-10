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
                    <li class="active ">
                        <a href="/products">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
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
                                <h4 class="card-title"> Data Barang</h4>
                            </div>
                            <form action="/products/update/{{$product->id}}" method="post">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group" style="padding-left: 17px">
                                            <label>Nama</label>
                                            <input input type="text" name="name" value="{{$product->name}}" required="required" class="form-control" placeholder="Nama">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group" style="padding-left: 17px">
                                            <label>Jumlah</label>
                                            <input type="int" name="stocks" value="{{$product->stocks}}" required="required" class="form-control" placeholder="Jumlah">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group" style="padding-left: 17px">
                                            <label>Harga</label>
                                            <input input type="int" name="price" value="{{$product->price}}" required="required" class="form-control" placeholder="Harga">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group" style="padding-left: 17px">
                                            <label>Deskripsi</label>
                                            <input input type="string" name="description" value="{{$product->description}}" required="required" class="form-control" placeholder="Deskripsi">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group" style="padding-left: 17px">
                                            <label>Gambar</label>
                                            <input input type="string" name="image_url" value="{{$product->image_url}}" required="required" class="form-control" placeholder="Image url">
                                        </div>
                                    </div>
                                </div>
                                <div class=" update mr-auto">
                                    <a href="/products" class="btn btn-primary btn-round btn-danger">Batal</a>
                                    <button type="submit" class="btn btn-primary btn-round btn-success">Simpan</button>
                                </div>
                            </form>
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
<!-- <!DOCTYPE html>
<html>
<body>
    <h3>Data Barang</h3>

    <a href="/barang"> Kembali</a>

    <br />
    <br />

    <form action="/barang/store" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br />
        Jumlah <input type="int" name="jumlah" required="required"> <br />
        Harga <input type="int" name="harga" required="required"> <br />
        <input type="submit" value="Simpan Data">
    </form>

</body>

</html> -->