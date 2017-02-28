<?php
$logged = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>كـشك | الصفحة الرئيسية</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9] ( May we don't need these 2 script sources! )
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php
    include "navbar.php";
    ?>

    <!-- Page Content -->
    <div class="container my-down-navbar">

        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <form>
                    <div class="form-group input-group my-search">
                        <input type="text" class="form-control text-right" placeholder="بحث" aria-describedby="basic-addon1">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="row carousel-holder">
                    <div class="col-md-12">
                        <div id="carousel-ad" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-ad" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-ad" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/ad_example.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/ad_example.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-ad" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-ad" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Last seen -->
                <div class="row margin-top-30 carousel-holder">
                    <div class="col-xs-12"><h3 class="text-right my-section-title">شوهدت مؤخراً</h3></div>
                    <div class="col-xs-12">
                        <div id="lastSeenCarousel" class="carousel slide my-carousel-slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators my-carousel-indicators">
                                <li data-target="#lastSeenCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#lastSeenCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- First slide -->
                                <div class="item active">
                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2 col-xs-offset-1 col-md-offset-1">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="item">
                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2 col-xs-offset-1 col-md-offset-1">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#lastSeenCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#lastSeenCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>





                <!-- Suggested items -->
                <div class="row margin-top-30 carousel-holder">
                    <div class="col-xs-12"><h3 class="text-right my-section-title">المنتجات المقترحة</h3></div>
                    <div class="col-xs-12">
                        <div id="suggestedItemsCarousel" class="carousel slide my-carousel-slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators my-carousel-indicators">
                                <li data-target="#suggestedItemsCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#suggestedItemsCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- First slide -->
                                <div class="item active">
                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2 col-xs-offset-1 col-md-offset-1">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="item">
                                    <!-- CARD -->
                                    <div class="col-xs-5 col-md-2 col-xs-offset-1 col-md-offset-1">
                                        <div class="card my-block">
                                            <img class="card-img-top" src="images/last_seen_example.jpg" width="100%" alt="Card image cap">
                                            <div class="card-block">
                                                <h4 class="card-title text-center">Nike shoes</h4> <br>
                                                <p class="card-text text-danger text-center">03 : 27 min</p>
                                                <p class="card-text text-warning text-center">35 S.R</p>
                                                <a href="#" class="btn btn-success center-block">مشاهدة</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#suggestedItemsCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#suggestedItemsCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>







                <div class="row">
                    <div class="col-xs-12"><h3 class="text-right">آخر العروض</h3></div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail my-thumbnail">
                            <img src="images/last_seen_example.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-left">35 S.R</h4>
                                <h4 class="text-right"><a href="#">منتج رائع</a>
                                </h4>
                                <p class="text-right">تصفح هذا المنتج بشكل مفصل من هذا الرابط <a target="_blank" href="#">كشك | منتج جديد</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-left">تقييم 15</p>
                                <p class="text-right">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail my-thumbnail">
                            <img src="images/last_seen_example.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-left">35 S.R</h4>
                                <h4 class="text-right"><a href="#">منتج رائع</a>
                                </h4>
                                <p class="text-right">تصفح هذا المنتج بشكل مفصل من هذا الرابط <a target="_blank" href="#">كشك | منتج جديد</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-left">تقييم 15</p>
                                <p class="text-right">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail my-thumbnail">
                            <img src="images/last_seen_example.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-left">35 S.R</h4>
                                <h4 class="text-right"><a href="#">منتج رائع</a>
                                </h4>
                                <p class="text-right">تصفح هذا المنتج بشكل مفصل من هذا الرابط <a target="_blank" href="#">كشك | منتج جديد</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-left">تقييم 15</p>
                                <p class="text-right">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail my-thumbnail">
                            <img src="images/last_seen_example.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-left">35 S.R</h4>
                                <h4 class="text-right"><a href="#">منتج رائع</a>
                                </h4>
                                <p class="text-right">تصفح هذا المنتج بشكل مفصل من هذا الرابط <a target="_blank" href="#">كشك | منتج جديد</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-left">تقييم 15</p>
                                <p class="text-right">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail my-thumbnail">
                            <img src="images/last_seen_example.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-left">35 S.R</h4>
                                <h4 class="text-right"><a href="#">منتج رائع</a>
                                </h4>
                                <p class="text-right">تصفح هذا المنتج بشكل مفصل من هذا الرابط <a target="_blank" href="#">كشك | منتج جديد</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-left">تقييم 15</p>
                                <p class="text-right">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail my-thumbnail">
                            <img src="images/last_seen_example.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-left">35 S.R</h4>
                                <h4 class="text-right"><a href="#">منتج رائع</a>
                                </h4>
                                <p class="text-right">تصفح هذا المنتج بشكل مفصل من هذا الرابط <a target="_blank" href="#">كشك | منتج جديد</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-left">تقييم 15</p>
                                <p class="text-right">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
    <?php
    include "footer.html";
    ?>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
