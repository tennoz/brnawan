<?php echo View::make('header'); ?>

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