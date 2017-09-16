<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--    internet explorer compatibility meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--    first mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BRNAWAN</title>
    <!--    bootstrap-->
    <link rel="stylesheet" href="css/bootstrap-arabic.min.css">
    <!--    fontawesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- opensasn fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <!--    lightbox-->
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!--    my stylesheet-->
    <link rel="stylesheet" href="css/style.css"> </head>
<!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->

<body>
    <!-- start header -->
    <div class="top-site">
        <header>
            <!-- start navbar -->
            <div class="container">
                <div class="row">
                    <!--               social media just show at mobile version-->
                    <div class="col-xs-6 col-xs-offset-3 visible-xs">
                        <ul class="list-inline ">
                            <li>
                                <a href="#"><img class="social img-responsive" src="images/social/1.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img class="social img-responsive" src="images/social/2.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img class="social img-responsive" src="images/social/3.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--------------------------------------->
                <!--           start main navbar-->
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">اﻟﺼﻔﺤﺔ اﻟﺮﺋﻴﺴﻴﺔ <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">اﻟﻘﻮاﺋﻢ اﻟﻤﺎﻟﻴﺔ</a></li>
                            <li><a href="#">اﻷﻧﻄﻤﺔ ﻭاﻟﺴﻴﺎﺳﺎﺕ</a></li>
                            <li><a href="#">اﻟﻬﻴﻜﻞ اﻟﻨﻈﺎﻣﻰ</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right hidden-xs">
                            <li>
                                <a href="#"><img class="social img-responsive" src="images/social/1.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img class="social img-responsive" src="images/social/2.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img class="social img-responsive" src="images/social/3.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- /.container-fluid -->
            <!-- end navbar -->
            <!-- start logo -->
            <div class="logo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"> <img class=" logo-img img-responsive" src="images/logo.png" alt=""> </div>
                        <div class="col-md-4 col-md-offset-4"> <img class="text img-responsive" src="images/text.png" alt=""> </div>
                    </div>
                </div>
            </div>
            <!-- end logo -->
        </header>
    </div>
    <!-- end header -->
    <!--start new donate-->
    <div class="table-donate">
        <div class="container">
            <h3> ﻗﺎﺋﻤﺔ ﺑﺄﺳﻤﺎء ﺑﺮاﻣﺞ اﻟﺘﻄﻮﻉ</h3>
            <div class="row">
                <table class="table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="text-center">ﻡ</th>
                            <th class="text-center"> اﺳﻢ اﻟﺒﺮﻧﺎﻣﺞ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($files as $file) : ?>
                            <tr>
                                <td class="c-ser"><?= $file->id; ?></td>
                                <td class="c-name"><a href=""><?= $file->file_name; ?></a></td>
                                <td class="c-remove">
                                    <a href="" class="fa fa-file-text"></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--   end new-donate-->
    <!--start bank-->
    <div class="bank-section">
        <div class="container">
            <div class="col-xs-12 col-md-6">
                <h4>ﺃﺭﻗﺎﻡ ﺣﺴﺎﺑﺎﺗﻨﺎ ﻟﺴﻬﻮﻟﻪ اﻟﺘﺤﻮﻳﻞ ﻋﻠﻰ ﻣﺼﺮﻑ اﻟﺮاﺟﺤﻲ</h4>
                <h5>0123456789876543210</h5> </div>
            <div class="col-xs-12 col-md-6"> <img src="images/bank1.png" class="img-responsive center-block"> </div>
        </div>
    </div>
    <!--end bank-->
    <!--    start footer-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        <li class="active"><a href="#">اﻟﺮﺋﻴﺴﻴﺔ</a></li>
                        <li><a href="#"> ﻋﻦ اﻟﺠﻤﻌﻴﺔ </a></li>
                        <li><a href="#"> ﺃﻋﻀﺎء ﻣﺠﻠﺲ اﻹﺩاﺭﺓ </a></li>
                        <li><a href="#">اﻷﻋﻀﺎء اﻟﻤﺆﺳﺴﻴﻦ </a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        <li><a href="#">ﺃﻧﺸﻄﺔ اﻟﺠﻤﻌﻴﺔ </a> </li>
                        <li><a href="#">ﻣﻌﺮﺽ اﻟﺼﻮﺭ </a></li>
                        <li><a href="#">ﻣﻌﺮﺽ اﻟﻔﻴﺪﻳﻮ </a></li>
                        <li><a href="#">اﺗﺼﻞ ﺑﻨﺎ </a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="call-us">
                        <h3><i class="fa fa-phone-square"></i> ﻛﻦ ﻋﻠﻰ <span class="color">ﺗﻮاﺻﻞ </span> ﻣﻌﻨﺎ </h3>
                        <p>اﻟﺒﺮﻳﺪ اﻹﻟﻜﺘﺮﻭﻧﻰ :
                            <br><span>brnawan@gmail.com</span></p>
                        <!--               start social-->
                        <div class="social"> <a href="https://www.facebook.com/"><i class="fa fa-facebook fa-1x fa-fw"></i></a> <a href="https://www.twitter.com"><i class="fa fa-twitter fa-1x fa-fw"></i></a> <a href="https://www.instagram.com"><i class="fa fa-instagram fa-1x fa-fw"></i></a> <a href="https://www.youtube.com"><i class="fa fa-youtube-play fa-1x fa-fw"></i></a> <a href="https://www.snapchat.com"><i class="fa fa-snapchat-ghost fa-1x fa-fw"></i></a> </div>
                        <!--                end social-->
                    </div>
                </div>
                <div class="col-md-3">
                    <p class="last">ﺭﻗﻢ اﻟﻬﺎﺗﻒ :
                        <br><span>050-941-4210</span></p>
                </div>
            </div>
        </div>
    </div>
    <!--    end footer-->
    <!--    script files------------------------------->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/bootstrap-arabic.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>