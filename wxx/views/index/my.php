<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WXX</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- CSS Animate -->

    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Vector Map  -->
    <link rel="stylesheet" href="../assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css">
    <!-- ToDos  -->

    <!-- Morris  -->

    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <!-- Feature detection -->
    <script src="../assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<section id="container">

    <!--sidebar left start-->
<?php

include("../views/public/header.php");

?>
    <!--sidebar left end-->
    <!--main content start-->
    <section class="main-content-wrapper">
        <section id="main-content">
            <!--tiles start-->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="dashboard-tile detail tile-red">
                        <div class="content">
                            <h1 class="text-left timer" data-from="0" data-to="180" data-speed="2500"></h1>
                            <p>New Users</p>
                        </div>
                        <div class="icon"><i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="dashboard-tile detail tile-turquoise">
                        <div class="content">
                            <h1 class="text-left timer" data-from="0" data-to="56" data-speed="2500"></h1>
                            <p>New Comments</p>
                        </div>
                        <div class="icon"><i class="fa fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="dashboard-tile detail tile-blue">
                        <div class="content">
                            <h1 class="text-left timer" data-from="0" data-to="32" data-speed="2500"></h1>
                            <p>New Messages</p>
                        </div>
                        <div class="icon"><i class="fa fa fa-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="dashboard-tile detail tile-purple">
                        <div class="content">
                            <h1 class="text-left timer" data-to="105" data-speed="2500"></h1>
                            <p>New Sales</p>
                        </div>
                        <div class="icon"><i class="fa fa-bar-chart-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--tiles end-->
            <!--dashboard charts and map start-->
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Office locations</h3>
                            <div class="actions pull-right">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="map" id="map" style="height: 250px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--dashboard charts and map end-->
            <!--ToDo start-->
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-solid-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Weather</h3>
                            <div class="actions pull-right">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="text-center small-thin uppercase">Today</h3>
                                    <div class="text-center">
                                        <canvas id="clear-day" width="110" height="110"></canvas>
                                        <h4>62°C</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="text-center small-thin uppercase">Tonight</h3>
                                    <div class="text-center">
                                        <canvas id="partly-cloudy-night" width="110" height="110"></canvas>
                                        <h4>44°C</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-2">
                                    <h6 class="text-center small-thin uppercase">Mon</h6>
                                    <div class="text-center">
                                        <canvas id="partly-cloudy-day" width="32" height="32"></canvas>
                                        <span>48°C</span>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <h6 class="text-center small-thin uppercase">Mon</h6>
                                    <div class="text-center">
                                        <canvas id="rain" width="32" height="32"></canvas>
                                        <span>39°C</span>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <h6 class="text-center small-thin uppercase">Tue</h6>
                                    <div class="text-center">
                                        <canvas id="sleet" width="32" height="32"></canvas>
                                        <span>32°C</span>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <h6 class="text-center small-thin uppercase">Wed</h6>
                                    <div class="text-center">
                                        <canvas id="snow" width="32" height="32"></canvas>
                                        <span>28°C</span>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <h6 class="text-center small-thin uppercase">Thu</h6>
                                    <div class="text-center">
                                        <canvas id="wind" width="32" height="32"></canvas>
                                        <span>40°C</span>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <h6 class="text-center small-thin uppercase">Fri</h6>
                                    <div class="text-center">
                                        <canvas id="fog" width="32" height="32"></canvas>
                                        <span>42°C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--ToDo end-->
        </section>
    </section>
    <!--main content end-->
    <!--sidebar right start-->

    <!--sidebar right end-->
</section>
<!--Global JS-->
<script src="../assets/js/jquery-1.10.2.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/waypoints/waypoints.min.js"></script>
<script src="../assets/js/application.js"></script>
<!--Page Level JS-->
<script src="../assets/plugins/countTo/jquery.countTo.js"></script>
<script src="../assets/plugins/weather/js/skycons.js"></script>
<!-- FlotCharts  -->
<!-- Morris  -->

<!-- Vector Map  -->
<script src="../assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
<!-- ToDo List  -->
<script src="../assets/plugins/todo/js/todos.js"></script>
<!--Load these page level functions-->
<script>
    $(document).ready(function() {
        app.timer();
        app.map();
        app.weather();

    });
</script>

</body>

</html>
