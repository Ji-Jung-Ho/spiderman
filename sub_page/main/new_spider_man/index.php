<?
    include_once('./_common.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>신상품 | 마켓컬리</title>
    <link rel="shortcut icon" href="<?=$path?>img/spiderman.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <script src="<?=$path?>js/lib/jquery-1.12.4.min.js"></script>
    <script src="<?=$path?>js/lib/jquery.easing.1.3.js"></script>

</head>
<body>
<div id="wrap">

<?
    include_once($path.'modal.php');
    include_once($path.'header.php');
?>

<main id="main" class="main3">
    <section id="section1">
        <div class="container">
            <div class="title">
                <h2 class="hide">New-spider-man</h2>
            </div>
            <div class="content">
                <ul>
                    <li>
                        <img src="./img/new-spider-man-1.jpg" alt="">
                        <div class="movie-info">
                            <h2>new spider man 1</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est omnis officia voluptate velit ducimus tenetur ab itaque voluptatum. Consequatur, vero natus. A modi minima repellendus omnis explicabo voluptatibus laudantium repellat.</p>
                        </div>
                    </li>
                    <li>
                        <img src="./img/new-spider-man-2.jpg" alt="">
                        <div class="movie-info">
                            <h2>new spider man 2</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est omnis officia voluptate velit ducimus tenetur ab itaque voluptatum. Consequatur, vero natus. A modi minima repellendus omnis explicabo voluptatibus laudantium repellat.</p>
                        </div>
                    </li>
                    <li>
                        <img src="./img/new-spider-man-3.jpg" alt="">
                        <div class="movie-info">
                            <h2>new spider man 3</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est omnis officia voluptate velit ducimus tenetur ab itaque voluptatum. Consequatur, vero natus. A modi minima repellendus omnis explicabo voluptatibus laudantium repellat.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="section2">
        <div class="container">
            <div class="title hide">
                <h2>new-spider-man</h2>
            </div>
            <div class="content">
                <!-- <ul class="banner-list"> -->
                    <!-- <li data-num="1"><a href="#" title="banner_img"><img src="./img/banner1.jpg" alt="banner_img"></a></li> -->
                </ul>
            </div>
        </div>
    </section>

</main>

<?
    include_once($path.'footer.php');
    include_once($path.'quick_menu.php');
    include_once($path.'go_top.php');
?>

</div>
<script src="./js/ajax.js"></script>

<script src="<?=$path?>js/modal.js"></script>    
<script src="<?=$path?>js/header.js"></script>    
<script src="<?=$path?>js/quick_menu.js"></script>    
<script src="<?=$path?>js/go_top.js"></script> 

</body>
</html>