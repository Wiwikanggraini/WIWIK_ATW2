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
     <div class="mailbox-view-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">
                                <a href="mailbox_compose.html" class="btn btn-success compose-btn btn-block m-b-md">Compose</a>
                                <ul class="mailbox-list">
                                    <li>
                                        <a href="#">
                                                <span class="pull-right">12</span>
                                                <i class="fa fa-envelope"></i> Inbox
                                            </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-paper-plane"></i> Sent</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pencil"></i> Draft</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-trash"></i> Trash</a>
                                    </li>
                                </ul>
                                <hr>
                                <ul class="mailbox-list">
                                    <li>
                                        <a href="#"><i class="fa fa-plane text-danger"></i> Travel</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-bar-chart text-warning"></i> Finance</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-users text-info"></i> Social</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-tag text-success"></i> Promos</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-flag text-primary"></i> Updates</a>
                                    </li>
                                </ul>
                                <hr>
                                <ul class="mailbox-list">
                                    <li>
                                        <a href="#"><i class="fa fa-gears"></i> Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-info-circle"></i> Support</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="hpanel email-compose mailbox-view mg-b-15">
                            <div class="panel-heading hbuilt">

                                <div class="p-xs h4">
                                    <small class="pull-right">
                                            08:26 PM (16 hours ago)
                                        </small> Email view

                                </div>
                            </div>
                            <div class="border-top border-left border-right bg-light">
                                <div class="p-m custom-address-mailbox">

                                    <div>
                                        <span class="font-extra-bold">Subject: </span> Lorem Ipsum has been the industry's standard dummy text ever
                                    </div>
                                    <div>
                                        <span class="font-extra-bold">From: </span>
                                        <a href="#">example.@email.com</a>
                                    </div>
                                    <div>
                                        <span class="font-extra-bold">Date: </span> 14.10.2016
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body panel-csm">
                                <div>
                                    <h4>Hello Jonathan! </h4>

                                    <p>Dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the dustrys</strong> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                        a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                        containing Lorem Ipsum passages, and more
                                        <br/>
                                        <br/>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                                        a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. recently with.</p>

                                    <p>Mark Smith
                                    </p>
                                </div>
                            </div>

                            <div class="border-bottom border-left border-right bg-white mg-tb-15">
                                <p class="m-b-md">
                                    <span><i class="fa fa-paperclip"></i> 3 attachments - </span>
                                    <a href="#" class="btn btn-default btn-xs">Download all in zip format <i class="fa fa-file-zip-o"></i> </a>
                                </p>

                                <div>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="hpanel">
                                                <div class="panel-body file-body incon-ctn-view">
                                                    <i class="fa fa-file-pdf-o text-info"></i>
                                                </div>
                                                <div class="panel-footer">
                                                    <a href="#">Document_2016.doc</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="hpanel">
                                                <div class="panel-body file-body incon-ctn-view">
                                                    <i class="fa fa-file-audio-o text-warning"></i>
                                                </div>
                                                <div class="panel-footer">
                                                    <a href="#">Audio_2016.doc</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="hpanel">
                                                <div class="panel-body file-body incon-ctn-view">
                                                    <i class="fa fa-file-excel-o text-success"></i>
                                                </div>
                                                <div class="panel-footer">
                                                    <a href="#">Sheets_2016.doc</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="panel-footer text-right">
                                <div class="btn-group">
                                    <button class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                                    <button class="btn btn-default"><i class="fa fa-arrow-right"></i> Forward</button>
                                    <button class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                                    <button class="btn btn-default"><i class="fa fa-trash-o"></i> Remove</button>
                                </div>
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