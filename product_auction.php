<?php
$logged = true;
$withDirectBuy = true;
$loggedUserBoughtProduct = false;
$endAuction = false;
$endFixed = false;
$productType = "fixed";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>كـشك | مزايدة</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/product_auction.css" rel="stylesheet">

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


<br><br><br><br>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-xs-10 col-md-6 col-xs-offset-1 col-md-offset-3">
                <h1 class="text-center">حذاء جري</h1>
            </div>
        </div>

        <br><br>

        <div class="row">
            <!-- Product's images -->
            <div class="col-xs-12 col-md-7">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner my-product-images-carousel" role="listbox">
                        <div class="item active">
                            <img src="images/last_seen_example.jpg">
                        </div>

                        <div class="item">
                            <img src="images/last_seen_example.jpg">
                        </div>

                        <div class="item">
                            <img src="images/last_seen_example.jpg">
                        </div>

                        <div class="item">
                            <img src="images/last_seen_example.jpg">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- / Product's images -->

            <!-- Her, we have to say, if the device is moble, then put some <br> tags to make some nice space between aproduct's images and auction card -->
            <!--
            <div class="col-xs-12 col-md-5">
                <div class="my-auction-card my-auction-card-time">
                    <h2 class="text-center my-timer-text">00 : 27 : 45</h2>



                    <h4 class="text-right">35 S.R : السعر الابتدائي </h4>
                    <h4 class="text-right">67 S.R : آخر مزايدة </h4>
                </div>

                <div class="my-auction-card my-auction-card-auctioning">
                    <h4 class="text-center">قم بالمزايدة الآن !</h4>
                    <div class="col-xs-12 text-center">
                        <form class="form-inline">
                            <div class="col-xs-3">
                                <button type="submit" class="btn btn-success">مزايدة</button>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">ريال</div>
                                    <input type="text" class="form-control text-right"  placeholder="قيمة المزايدة">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div> -->


            <div class="col-xs-12 col-md-5">
                <?php
                if ($productType == "auctioned") {
                    ?>
                    <div class="col-xs-12 col-md-6">
                        <div class="my-auction-card my-auction-card-top">
                            <h4 class="text-center">السعر الابتدائي</h4>
                            <h4 class="text-center">35 ريال</h4>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="my-auction-card my-auction-card-top">
                            <h4 class="text-center">قيمة آخر مزايدة</h4>
                            <h4 class="text-center">45 ريال</h4>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="my-auction-card my-auction-card-time">
                            <h4 class="text-center">الوقت المتبقي</h4>
                            <h2 class="text-center my-timer-text">00 : 27 : 45</h2>
                            <!--
                            <div class="my-timer">

                            </div>
                            -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="my-auction-card my-auction-card-auctioning">
                            <?php
                            if (!$endAuction) {
                                if ($logged) {
                                    ?>
                                    <h4 class="text-center">قم بالمزايدة الآن !</h4>
                                    <form class="form-inline">
                                        <div class="col-xs-12">
                                            <button class="center-block auction-up"><span
                                                    class="glyphicon glyphicon-chevron-up"></span></button>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">ريال</div>
                                                <input type="text" class="form-control text-right" placeholder="قيمة المزايدة">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <button class="center-block auction-down"><span
                                                    class="glyphicon glyphicon glyphicon-chevron-down"></span></button>
                                        </div>
                                        <button type="submit" class="btn btn-success auction-submit-btn center-block">مزايدة</button>
                                    </form>
                                    <?php
                                } else {
                                    ?>
                                    <h4 class="text-right">رجاء، قم بتسجيل الدخول لتتمكن من المزايدة على هذه السلعة</h4>
                                    <?php
                                }
                            } else {
                                ?>
                                <h4 class="text-right">انتهت المزايدة على هذه السلعة</h4>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12">
                        <div class="my-auction-card my-auction-card-direct-purchase">
                            <?php
                            if (!$endAuction) {
                                if ($withDirectBuy) {
                                    ?>
                                    <h4 class="text-center">شراء فوري بقيمة 50 ريال</h4>
                                    <?php
                                    if ($logged) {
                                        ?>
                                        <button class="btn btn-success auction-direct-purchase-btn center-block">شراء فوري</button>
                                        <?php
                                    } else {
                                        ?>
                                        <h4 class="text-center">رجاء، قم بتسجيل الدخول لتتمكن من الشراء الفوري</h4>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <h4 class="text-center">لا يتوفر شراء فوري لهذه السلعة</h4>
                                    <?php
                                }
                            } else {
                                ?>
                                <h4 class="text-right">انتهت المزايدة على هذه السلعة</h4>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                } elseif ($productType == "fixed") {
                    ?>
                    <div class="my-fixed-card my-fixed-card-price">
                        <h2 class="text-center my-fixed-text">35 S.R</h2>
                        <h4 class="text-right">5 : الكمية المتبقية</h4>
                    </div>

                    <div class="my-fixed-card my-fixed-card-buy">
                        <?php
                        if (!$endFixed) {
                            ?>
                            <h4 class="text-center">قم بشرائه الآن !</h4>
                            <div class="col-xs-12 text-center">
                                <form class="form-inline">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-success btn-block">شـراء</button>
                                    </div>
                                </form>
                            </div>
                            <?php
                        } else {
                            ?>
                            <h4 class="text-center" style="margin-top: 40px;">هذا المنتج غير متاح حالياً</h4>
                            </div>
                            <?php
                        }
                }
                ?>



            </div>

        </div>

        <!-- Product's description -->
        <div class="row margin-top-30">
            <div class="col-xs-12"><h3 class="text-right my-section-title">وصف المنتج</h3></div>
            <div class="col-xs-12">
                <div class="my-description">
                    <p class="text-right">حذاء رياضي بتصميم مميز• يحتوي على شعار ماركة نايك الشهيره عالميا• مصنوع من مواد عالية الجودة• لايتسبب في أي ألم للقدم أثناء إرتداؤه• بطانة داخلية ناعمه لتوفير الراحة للقدم• يمتاز بخفته وأناقته•</p>
                     <p class="text-right">سيقدّم لك حذاء كرة قدم ماجيستا اكس بروكيمو 2 تيرف هذا من نايك إمكانية التحكّم بدقّة أدائك عند اللعب في الملاعب الصناعية. فهو مُصمم بسوار كاحل صدفي من دايناميك فيت الذي يربط الساق السفلى بالقدم بدون إعاقة الحركة، بالاضافة إلى خامته ثلاثية الأبعاد ذات الملمس البارز في مناطق مُحددة. يُذكر أن توسيدة لونارلون بطبقتي الفوم ستمنحك اداءً خفيف الحركة وذو الاستجابة اللازمة فضلاً عن تصميم رباطه الغير متساوي لتحكّم إضافي</p>
                </div>
            </div>
        </div>



        <!-- Suggested items -->
        <div class="row margin-top-30 carousel-holder">
            <div class="col-xs-12"><h3 class="text-right my-section-title">منتجات مقترحة</h3></div>
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


        <!-- Rating -->
        <div class="row margin-top-30">
            <div class="col-xs-12"><h3 class="text-right my-section-title">معلومات البائع</h3></div>
            <div class="col-xs-12 col-md-5">
                <div class="my-seller-rating">
                    <div class="col-xs-12">
                        <img src="images/user-icon.png" class="img-circle img-thumbnail center-block my-user-icon">
                        <div class="ratings"><br>
                            <p class="text-center" style="font-size: 18px;">تقييم 15</p>
                            <p class="text-center" style="font-size: 20px;">
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

            <!-- Here, if the user bought the product, then show this section, if not, disolay a message saying: you have to bought it before rate the seller -->
            <div class="col-xs-12 col-md-4">
                <div class="my-seller-rating">
                    <div class="col-xs-12">
                        <br>
                        <?php
                        if ($loggedUserBoughtProduct) {
                            ?>
                            <h2 class="text-center" style="font-size: 22px;">قيم البائع</h2>
                            <br><br><br>
                            <p class="text-center" style="font-size: 30px;">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                            <br><br><br>
                            <button type="submit" class="btn btn-success center-block">تقييم</button>
                            <?php
                        } else {
                            ?>
                            <h2 class="text-center" style="font-size: 22px;">صفحة تقييم البائع</h2>
                            <h2 class="text-center" style="font-size: 18px; margin-top: 80px;">ستظهر لك خيارات تقييم البائع إذا كنت أنت المشتري لهذه السلعة</h2>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3">
                <div class="my-seller-rating">
                    <div class="col-xs-12">
                        <h2 class="text-right" style="font-size: 22px;"> : اسم البائع</h2>
                        <p class="text-right" style="font-size: 18px;">معاذ جابر</p>

                        <h2 class="text-right" style="font-size: 22px;"> : رقم التواصل</h2>
                        <p class="text-right" style="font-size: 18px; font-family: Roboto">055 555 5555</p>

                        <h2 class="text-right" style="font-size: 22px;"> : وصف البائع</h2>
                        <p class="text-right" style="font-size: 18px;">متخصص في الأحذية الرياضية من الشركات العالمية الكبرى، الجودة شعارنا</p>
                    </div>
                </div>
            </div>

        </div>





        <!-- Comments -->
        <div class="row margin-top-30">
            <div class="col-xs-12"><h3 class="text-right my-section-title">تعليقات المستخدمين</h3></div>
            <div class="col-xs-12 my-comments-section">
                <ul class="media-list">
                    <li class="media my-seller-comment-section">
                        <div class="media-body text-right">
                            <h4 class="media-heading">معاذ جابر</h4>
                            <p>لمن سأل، نعم هناك إمكانية لتوصيل المنتج لأي مدينة في المملكة.</p>
                            <p>نشكر لك ثقتك بنا</p>
                        </div>
                        <div class="media-right">
                            <a href="#">
                                <img class="media-object my-user-icon-comment img-thumbnail img-circle" src="images/user-icon.png">
                            </a>
                        </div>
                    </li>

                    <li class="media my-user-comment-section">
                        <div class="media-body text-right">
                            <h4 class="media-heading">محمد إبراهيم</h4>
                            <p>منتج جميل جداً وأنصح الجميع باقتنائه</p>
                        </div>
                        <div class="media-right">
                            <a href="#">
                                <img class="media-object my-user-icon-comment img-thumbnail img-circle" src="images/user-icon.png">
                            </a>
                        </div>
                    </li>

                    <li class="media my-user-comment-section">
                        <div class="media-body text-right">
                            <h4 class="media-heading">صالح عبدالعزيز</h4>
                            <p>هل هناك إمكانية لتوصيل المنتج لي في مدينة تبعد عن الرياض ٣٩٨ كلم ؟</p>
                            <p>أنا حقاً معجب ببضاعتكم وأريد اقتناءها في أسرع وقت</p>
                            <p>شكراً لكم</p>
                        </div>
                        <div class="media-right">
                            <a href="#">
                                <img class="media-object my-user-icon-comment img-thumbnail img-circle" src="images/user-icon.png">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <?php
            if ($logged) {
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="write-comment-section text-right">
                            <form>
                                <div class="form-group">
                                    <label for="writeComment">اكتب تعليقا</label>
                                    <textarea class="form-control text-right" id="writeComment" rows="5"
                                              dir="rtl"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">إرسال</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>





    <?php
    include "footer.html";
    ?>


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
