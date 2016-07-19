<!DOCTYPE html>
<?php
$session = Yii::$app->session;
if(!isset($session['language'])){
    echo  "<script>location.href='index.php?r=login/login'</script>";die;
}
?>
<html class="no-js">
<!--<![endif]-->

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

    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <script src="../assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>

<body>
<section id="container">

    <!--sidebar start-->
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
                        <li><a href="index.php?r=index/my">主页</a>
                        </li>
                        <li>公众号管理</li>
                        <li class="active">修改公众号</li>
                    </ul>
                    <!--breadcrumbs end -->

                </div>
            </div>

            <div class="row">
                <!--                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Basic Form</h3>
                                            <div class="actions pull-right">
                                                <i class="fa fa-chevron-down"></i>
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">File input</label>
                                                    <input type="file" id="exampleInputFile">
                                                    <p class="help-block">Example block-level help text here.</p>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>


                                        </div>
                                    </div>
                                </div>-->
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="post" action="index.php?r=index/upd_pro">
                                <div class="form-group">
                                    <label for="inputEmail2" class="col-sm-2 control-label">appID：<?php echo
                                        $re['appid']?></label>

                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">appsecret：<b><?php echo
                                            $re['appsecret']?></b></label>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">昵称</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="uname" value="<?php echo $re['username']?>"
                                               class="form-control"
                                               placeholder="昵称">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">描述</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="info" value="<?php echo $re['info']?>"
                                               class="form-control" placeholder="描述你微信用途">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">确认修改</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>

</section>
<!--Global JS-->
<script src="../assets/js/jquery-1.10.2.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/waypoints/waypoints.min.js"></script>
<script src="../assets/js/application.js"></script>
<!--Page Level JS-->
<script src="../assets/plugins/icheck/js/icheck.min.js"></script>
<script>
    $(document).ready(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_flat-grey',
            radioClass: 'iradio_flat-grey'
        });

    });
</script>

</body>

</html>
