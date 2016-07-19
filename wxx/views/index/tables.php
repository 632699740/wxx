<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
<?php
$session = Yii::$app->session;
if(!isset($session['language'])){
    echo  "<script>location.href='index.php?r=login/login'</script>";die;
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SpaceLab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- DataTables-->

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
    <?php

    include("../views/public/header.php");

    ?>
    <!--sidebar end-->
    <!--main content start-->
    <section class="main-content-wrapper">
        <section id="main-content">
            <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="#">Dashboard</a>
                        </li>
                        <li>UI Elements</li>
                        <li class="active">Date Tables</li>
                    </ul>
                    <!--breadcrumbs end -->
                    <h1 class="h1">Date Tables</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Tables</h3>
                            <div class="actions pull-right">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>appID</th>
                                    <th>appsecret</th>
                                    <th>昵称</th>
                                    <th>描述</th>
                                    <th>URL</th>
                                    <th>Token</th>
                                    <th>操作</th>

                                </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($re as $v): ?>
                                    <tr>
                                        <td><?php echo $v['appid']?></td>
                                        <td><?php echo $v['appsecret']?></td>
                                        <td><?php echo $v['username']?></td>
                                        <td><?php echo $v['info']?></td>
                                        <td><?php echo $v['url']?></td>
                                        <td><?php echo $v['token']?></td>
                                        <td><a href="index.php?r=index/upd&id=<?php echo $v['id']?>">修改</a>||<a href="index.php?r=index/del&id=<?php echo $v['id']?>">删除</a></td>
                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

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
<script src="../assets/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
<script src="../assets/js/application.js"></script>
<!--Page Leve JS -->



</body>

</html>
