<?
    include_once('./_common.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스파이더맨</title>
    <link rel="shortcut icon" href="<?=$path?>img/etc-img/spider-main-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/lib/jquery-1.12.4.min.js"></script>
    <script src="<?=$path?>js/lib/jquery.easing.1.3.js"></script>
</head>
<body>
    <div id="wrap">
    <?
        // include_once($path.'modal.php');
        include_once($path.'header.php');
        include_once($path.'intro_main.php');
        include_once($path.'footer.php');
        // include_once($path.'quick_menu.php');
        include_once($path.'go_top.php');
    
    ?>
</div>

    <script src="<?=$path?>js/modal.js"></script>
    <script src="<?=$path?>js/header.js"></script>
    <script src="<?=$path?>js/intro_main.js"></script>
    <script src="<?=$path?>js/quick_menu.js"></script>
    <script src="<?=$path?>js/go_top.js"></script>

</body>
</html>