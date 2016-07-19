<!DOCTYPE html>
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
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- iCheck-->
    <link rel="stylesheet" href="../assets/plugins/icheck/css/_all.css">
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
    <!--main content start-->
    <section class="main-content-wrapper">
        <section id="main-content">
            <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="#">主页</a>
                        </li>
                        <li>公众号管理</li>
                        <li class="active">菜单管理</li>
                    </ul>
                    <!--breadcrumbs end -->
                    <h1 class="h1">设置菜单</h1>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <label class="col-sm-3 control-label">选择公众账号</label>
                            <form class="form-horizontal" role="form" method="post" action="index.php?r=index/createmenu">
                            <div class="form-group">
                                <select class="form-control input-lg" id="sel" name="id">
                                    <option value="">--请选择--</option>
                                    <?php foreach ($re as $v): ?>
                                    <option value="<?php echo $v['id']?>"><?php echo $v['username']?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="inputPassword3" class="col-sm-2 control-label" id="la"></label>
                            </div>
                                <div id="men" style="display: none">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" name="menuo" class="form-control" placeholder="一级菜单">
                                    <label for="inputPassword3" class="col-sm-2 control-label">按键</label>
                                    <input type="hidden" name="token" id="tok" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" name="menut" class="form-control" placeholder="一级菜单">
                                    <label for="inputPassword3" class="col-sm-2 control-label">菜单</label>
                                </div>
                                <div>
                                    <input type="text" name="menuoo" class="form-control" placeholder="二级菜单1"
                                           style="width: 100px;"/>
                                    <input type="text" name="menuot" class="form-control" placeholder="二级菜单2"
                                           style="width: 100px;"/>
                                    <input type="text" name="menuos" class="form-control" placeholder="二级菜单3"
                                           style="width: 100px;"/>
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">添加</button>
                            </div>
                        </div>
                        </div>
                            </form>
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
<script src="../assets/js/application.js"></script>
<!--Page Level JS-->
<script>
    $(function(){
       $('#sel').change(function(){
           var id=$(this).val();
           $.get("index.php?r=index/menu_pro", { id:id},
               function(data){

                  if(data!=""){
                      $('#la').html("请设置");
                      $('#men').show();
                      $('#tok').val(data);

                   }else{
                      $('#la').html("不可用");
                   }
               });
       });
    });
</script>








</body>

</html>
