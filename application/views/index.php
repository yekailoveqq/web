<!-- 主页面 -->
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Book Share</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>source/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>source/carousel.css" rel="stylesheet">
</head>

<body>
<!-- 导航栏================================================== -->
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- 标题的头部 -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <!--  <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar">zjw</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span> -->
                    </button>
                    <!-- 标题的名字 -->
                    <a class="navbar-brand" href="#">Book Share</a>
                </div>
                <!-- 副标题 -->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!-- 返回主页 -->
                        <li><a href="main.html"><span class="glyphicon glyphicon-home"></span></a></li>
                        <!-- 登录 -->
                        <!--
                        <script type="text/javascript">
                        signinFuc();
                        haveSigned(zjw);
                        // 如果没有登录了，调用这个方法
                        function signinFuc() {
                          document.write("<li><a href=/"
                            login.html / ">Sign in</a></li>");
                        }
                        //如果已经登录，那么调用这个方法
                        function haveSigned(username) {
                          document.write("<li><a href=/"
                            login.html / ">" + username + "</a></li>");
                        }
                        </script>
                        <li onloadstart="signinFuc()">
                        </li> -->
                        <?php
                        if (isset($_SESSION['user'])) {
                            $user = $_SESSION['user']; ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false"><?php echo $user->username ?><span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('book/add'); ?>">Share my books</a></li>
                                    <li><a href="<?php echo site_url('book/mine'); ?>">My books</a></li>
                                    <li><a href="<?php echo site_url('user/history'); ?>">History</a></li>
                                    <?php if ($user->role == 'admin') { ?>
                                        <li><a href="<?php echo site_url('user/application'); ?>">Manage
                                                Applications</a></li>
                                    <?php } ?>
                                    <li role="separator" class="divider"></li>
                                    <!-- 如果是管理员，那么跳到管理员的界面 -->
                                    <!-- 如果不是没有效果 -->
                                    <li><a href="<?php echo site_url('user/logout'); ?>">Log Out</a></li>
                                </ul>
                            </li>
                        <?php } else {
                            ?>
                            <li><a href="<?php echo site_url('user/login'); ?>">Sign in</a></li>
                        <?php } ?>
                        <!-- 搜索图书-->
                        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!11 -->
                        <li><a href="<?php echo site_url('about'); ?>">About</a></li>
                        <form class="navbar-right navbar-form " role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <!-- 如果成功查找跳到 searchBooks.html -->
                            <script type="text/javascript">
                                function jump() {
                                    window.open("searchBooks.html");
                                }
                                //如果没有成功，那么跳到 noSuchBook.html
                                function jumpError() {
                                    window.open("searchBooks.html");
                                }
                            </script>
                            <button type="submit" class="btn btn-default" onclick="jump()">Submit</button>
                        </form>
                    </ul>
                    <!-- dropdown  -->
                </div>
        </nav>
    </div>
</div>
</div>
<!-- 巨幕 -->
<!-- ================================================== -->
<div class="container">
    <div class="jumbotron">
        <h1>Book Share</h1>
        <br>
        <h3>Books is flying here! Find your own books! Share your books!</h3>
        <br>
        <p class="btn btn-info btn-lg" role="button"><a href="memberIntro.html">Learn More</a>
        </p>
    </div>
</div>
<!-- Marketing messaging and featurettes
  ==================================================
  <!-- Wrap the rest of the page in another container to center all the content.

  <div class="container marketing">

    <!-- 分享书籍的显示 -->
<?php foreach ($books as $book) { ?>
    <div class="container">
        <!-- 第一本书的介绍 -->
        <hr class="featurette-divider" align="center">
        <div>
            <div>
                <!-- 书籍的图片 -->
                <img class="img-responsive col-md-2" src="<?php echo $book->image ?>"
                     alt="<?php echo $book->bookname ?>" width="100" height="100">
            </div>
            <div col-md-3>
                <!-- 书籍的标题 -->
                <h2 class="featurette-heading"><a
                        href="<?php echo site_url('book') . '/' . $book->bookid; ?>"><?php echo $book->bookname ?></a>
                    <!-- 书籍的作者 -->
                    <span class="label label-info"><?php echo $book->author ?></span>
                    <span class="label label-default"><?php echo $book->class ?></span>
                    <span class="label label-primary"><?php echo $book->status ?></span>
                </h2>
                <!-- 书籍的介绍 -->
                <p class="lead"><?php echo $book->introduction ?></p>
            </div>
        </div>
    </div>
<?php } ?>
<!-- pagination -->

<br>
<!-- 页面的页脚-->
<div class="container">
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 zjw &middot; <a href="#">Privacy</a> &middot; </p>
    </footer>
</div>
<!-- /.container -->
<!-- Bootstrap core JavaScript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>source/js/bootstrap.min.js"></script>
</body>

</html>