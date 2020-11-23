<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{('public')}}/assets/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/font-awesome.min.css">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/nalika-icon.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{('public')}}/assets/css/owl.theme.css">
    <link rel="stylesheet" href="{{('public')}}/assets/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{('public')}}/assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{('public')}}/assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 @include('template/section/sidebar')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{('public')}}/assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
  @include('template/section/header')
            <!-- Mobile Menu start -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Product List</h2>
                                                <p>Welcome to Putri <span class="bread-ntd">Admin</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
                                            <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="product-edit.html">Add Product</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Title</th>
                                    <th>Status</th>
                                    <th>Purchases</th>
                                    <th>Product sales</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Setting</th>
                                </tr>
                                <tr>
                                    <td><img src="{{('public')}}/assets/img/new-product/5-small.jpg" alt="" /></td>
                                    <td>Product Title 1</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>50</td>
                                    <td>$750</td>
                                    <td>Out Of Stock</td>
                                    <td>$15</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{('public')}}/assets/img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Product Title 2</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>60</td>
                                    <td>$1020</td>
                                    <td>In Stock</td>
                                    <td>$17</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{('public')}}/assets/img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Product Title 3</td>
                                    <td>
                                        <button class="ds-setting">Disabled</button>
                                    </td>
                                    <td>70</td>
                                    <td>$1050</td>
                                    <td>Low Stock</td>
                                    <td>$15</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{('public')}}/assets/img/new-product/5-small.jpg" alt="" /></td>
                                    <td>Product Title 4</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>120</td>
                                    <td>$1440</td>
                                    <td>In Stock</td>
                                    <td>$12</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{('public')}}/assets/img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Product Title 5</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>30</td>
                                    <td>$540</td>
                                    <td>Out Of Stock</td>
                                    <td>$18</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{('public')}}/assets/img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Product Title 6</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>400</td>
                                    <td>$4000</td>
                                    <td>In Stock</td>
                                    <td>$10</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            </table>
                            <div class="custom-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('template/section/footer')
    </div>

    <!-- jquery
        ============================================ -->
    <script src="{{('public')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{('public')}}/assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="{{('public')}}/assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{('public')}}/assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/calendar/moment.min.js"></script>
    <script src="{{('public')}}/assets/js/calendar/fullcalendar.min.js"></script>
    <script src="{{('public')}}/assets/js/calendar/fullcalendar-active.js"></script>
    <!-- float JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/flot/jquery.flot.js"></script>
    <script src="{{('public')}}/assets/js/flot/jquery.flot.resize.js"></script>
    <script src="{{('public')}}/assets/js/flot/curvedLines.js"></script>
    <script src="{{('public')}}/assets/js/flot/flot-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/main.js"></script>
</body>

</html>