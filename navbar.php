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
                        <a data-toggle="modal" data-target="#notificationModal" style="color:white;" href="#"><span class="glyphicon glyphicon-bell"></span> <span class="badge badge-default">2</span></a>
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





<!-- Notification Modal -->
<div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-right">التنبيهــات</h3>
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-2">
                        <p class="">3:45 PM</p>
                    </div>
                    <div class="col-xs-10">
                        <p class="text-right">تم إلغاء مزايدتك على آيفون فايف ٣٢ قيقا<span class="glyphicon glyphicon-bell"></span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <p class="">3:42 PM</p>
                    </div>
                    <div class="col-xs-10">
                        <p class="text-right">قمت بالمزايدة على آيفون فايف ٣٢ قيقا بقيمة ٢٢٠٠ ريال<span class="glyphicon glyphicon-bell"></span></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>
