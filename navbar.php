<style>
    .my-navbar {
        position: fixed;
        height: 100px;
        /*background-color: #ffab00;*/
        background-color: #444444;
    }
    .my-navbar-collapse {
        background-color: #444444;
    }
    .my-navbar a {
        font-size: 20px;
        margin-top: 24px;
        color: white;
    }
</style>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top my-navbar" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header pull-right">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color:white; font-size: 30px;" href="#">كــــشك</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse my-navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                if (!$logged) {
                    ?>
                    <li>
                        <a style="color:white;" href="#">تسجيل الدخول</a>
                    </li>
                    <li>
                        <a style="color:white;" href="#">تسجيل جديد</a>
                    </li>
                    <li>
                        <a style="color:white;" href="#">مساعدة</a>
                    </li>
                    <li>
                        <a style="color:white;" href="#"><span class="glyphicon glyphicon-heart"></span></a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li>
                        <a style="color:white;" href="#">تسجيل الخروج</a>
                    </li>
                    <li>
                        <a style="color:white;" href="#">مساعدة</a>
                    </li>
                    <li>
                        <a style="color:white;" href="#">dlaimotion</a>
                    </li>
                    <li>
                        <a style="color:white;" href="#"><span class="glyphicon glyphicon-heart"></span></a>
                    </li>
                    <li>
                        <a style="color:white;" href="#"><span class="glyphicon glyphicon-bell"></span></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
