<!-- 成员的介绍 -->
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>memberIntro@book share</title>
  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>source/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!-- 导航条 -->
<div class="navbar-wrapper">
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- 标题的头部 -->
        <div class="navbar-header ">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <!--  <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar">zjw</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> -->
          </button>
          <!-- 标题的名字 -->
          <a class="navbar-brand" href="#">Book Share</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <!-- 返回主页 -->
            <li>
              <a href="main.html"><span class="glyphicon glyphicon-home"></span></a>
            </li>
          </ul>
        </div>
    </nav>
  </div>
</div>
</div>
<!-- 人员介绍 -->
<div class="container">
  <h1 style="text-align: center;">Members Introduction</h1>
  <br>
  <br>
  <br>
  <div class="row">
    <!-- 人员 -->
    <div class="col-lg-4" align="center">
      <img class="img-circle" vertical-align="down" src="<?php echo base_url('source/images'); ?>/ly.jpg" width="140" height="140">
      <h2>Yi Lin</h2>
      <p class="text-danger">group leader</p>
      <p><a class="btn btn-default" href="#" role="button">support</a></p>
    </div>
    <!-- zjw -->
    <div class="col-lg-4" align="center">
      <img class="img-circle" src="<?php echo base_url('source/images'); ?>/zjw.jpg" width="140" height="140">
      <h2>Jiawei Zhou</h2>
      <p class="text-danger">Front-end web developer for this web</p>
      <p><a class="btn btn-default" href="#" role="button">support</a></p>
    </div>
    <!-- xiao nan -->
    <div class="col-lg-4" align="center">
      <img class="img-circle" src="<?php echo base_url('source/images'); ?>/pic.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Nan Xiao</h2>
      <p class="text-danger">Database Designer</p>
      <p><a class="btn btn-default" href="#" role="button">View details </a></p>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- 其他人 -->
<div class="container">
  <div class="row">
    <!-- 人员 -->
    <div class="col-lg-4" align="center">
      <img class="img-circle" vertical-align="down" src="<?php echo base_url('source/images'); ?>/pic.jpg" width="140" height="140">
      <h2>Ming Wang</h2>
      <p>intro</p>
      <p><a class="btn btn-default" href="#" role="button">support</a></p>
    </div>
    <!-- zjw -->
    <div class="col-lg-4" align="center">
      <img class="img-circle" src="<?php echo base_url('source/images'); ?>/pic.jpg" width="140" height="140">
      <h2>Fangnin Chao</h2>
      <p>intro</p>
      <p><a class="btn btn-default" href="#" role="button">support</a></p>
    </div>
    <!-- xiao nan -->
    <div class="col-lg-4" align="center">
      <img class="img-circle" src="<?php echo base_url('source/images'); ?>/pic.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Ruowen Ren</h2>
      <p>intro</p>
      <p><a class="btn btn-default" href="#" role="button">View details </a></p>
    </div>
  </div>
  <!-- /.row -->
</div>
<div class="container">
  <div class="row">
    <!-- 人员 -->
    <div class="col-lg-4" align="center">
      <img class="img-circle" vertical-align="down" src="<?php echo base_url('source/images'); ?>/pic.jpg" width="140" height="140">
      <h2>Yue Li</h2>
      <p>intro</p>
      <p><a class="btn btn-default" href="#" role="button">support</a></p>
    </div>
    <!-- zjw -->
    <div class="col-lg-4" align="center">
      <img class="img-circle" src="<?php echo base_url('source/images'); ?>/pic.jpg" width="140" height="140">
      <h2>Xin Wang</h2>
      <p>intro</p>
      <p><a class="btn btn-default" href="#" role="button">support</a></p>
    </div>
    <!-- xiao nan -->
    <div class="col-lg-4" align="center">
      <img class="img-circle" src="<?php echo base_url('source/images'); ?>/pic.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Tian Yang</h2>
      <p>intro</p>
      <p><a class="btn btn-default" href="#" role="button">View details </a></p>
    </div>
  </div>
</div>
<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<div class="container">
  <div class="row">
    <!-- 人员 -->
    <div class="col-lg-4" align="center">
      <img class="img-circle" vertical-align="down" src="<?php echo base_url('source/images'); ?>/pic.jpg" width="140" height="140">
      <h2>Xueting Zhang</h2>
      <p>intro</p>
      <p><a class="btn btn-default" href="#" role="button">support</a></p>
    </div>
  </div>
</div>
<!-- /.row -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>source/js/bootstrap.min.js"></script>
</body>

</html>