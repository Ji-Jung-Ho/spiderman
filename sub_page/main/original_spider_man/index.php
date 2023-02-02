<?
    include_once('./_common.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORIGINAL_SPIDER-MAN</title>
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
                <h2 class="hide">Original-spider-man</h2>
            </div>
            <div class="content">
                <a href="#"><img src="" alt=""></a>
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