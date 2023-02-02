<?
    include_once('./_common.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMAZING_SPIDER_MAN</title>
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

<main id="main" class="main2">
    <section id="section1">
        <div class="container">
            <div class="gap">
                <div class="title hide">
                    <h2>피규어 및 포스터 상품</h2>
                </div>
                <div class="content">
                    <a href="script:;"><img src="./img/mms679_mb.jpg" alt="스파이더맨 노웨이홈"></a>
                </div>
            </div>
        </div>
    </section>

    <section id="section2">
            <div class="container">
                <div class="title">
                    <h2>피규어 & 영화포스터 상품</h2>
                </div>
                <div class="content">
                    <div class="left">
                        <div class="title-filter">
                            <span>필터</span>
                            <button><svg width="12" height="12" viewBox="0 0 16 16" fill="none"><path d="M13.78 3.96303C12.504 2.16973 10.4086 1 8.04 1C4.15192 1 1 4.15192 1 8.04C1 11.9281 4.15192 15.08 8.04 15.08C11.9281 15.08 15.08 11.9281 15.08 8.04" stroke="#ddd" stroke-width="1.6" stroke-linecap="square" stroke-linejoin="round"></path><path d="M14.4933 1L14.4933 4.52H10.9733" stroke="#ddd" stroke-width="1.6" stroke-linecap="square" stroke-linejoin="round"></path></svg>초기화</button>
                        </div>
                        <div class="col-gap">
                            <div class="wrap">
                                <ul class="category">
                                    <li>
                                        <a href="#" class="category-btn">상품 검색<svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="#999"><path d="M5 11L9 7L13 11" stroke="#999" stroke-width="1.2"></path></svg></a>
                                        <div class="category-sub category-sub1">
                                            <ul>
                                                <li>
                                                    <input type="text" id="search" name="search" placeholder="검색어 입력">
                                                    <a href="script:;"title="search"><img src="<?=$path?>/img/search.png" alt=""></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="category-btn">판매 상품<svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="#999"><path d="M5 11L9 7L13 11" stroke="#999" stroke-width="1.2"></path></svg></a>
                                        <div class="category-sub category-sub1">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        피규어
                                                        <span>60</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        영화 포스터
                                                        <span>60</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="category-btn">캐릭터<svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="#999"><path d="M5 11L9 7L13 11" stroke="#999" stroke-width="1.2"></path></svg></a>
                                        <div class="category-sub category-sub2">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        오리지널 스파이더맨
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        어메이징 스파이더맨
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        new 스파이더맨
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        그외 인물
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="category-btn">영화<svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="#999"><path d="M5 11L9 7L13 11" stroke="#999" stroke-width="1.2"></path></svg></a>
                                        <div class="category-sub category-sub3">
                                            <ul>
                                                <li>
                                                    <label class="movie">
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        Spider-Man 1
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="movie">
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        Spider-Man 2
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="movie">
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        Spider-Man 3
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="movie">
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        Amazing-Spider 1
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="movie">
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        Amazing-Spider 2
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="movie">
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        Amazing-Spider 3
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="movie">
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        Home-Comming
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="movie">
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        Far-From-Home
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="movie">
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        No-Way-Home
                                                    </label>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="category-btn">가격<svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="#999"><path d="M5 11L9 7L13 11" stroke="#999" stroke-width="1.2"></path></svg></a>
                                        <div class="category-sub category-sub3">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        50,000원 미만
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        50,000원 ~ 100,000원 미만
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        100,000원 ~ 200,000원 미만
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.5 12C23.5 18.3513 18.3513 23.5 12 23.5C5.64873 23.5 0.5 18.3513 0.5 12C0.5 5.64873 5.64873 0.5 12 0.5C18.3513 0.5 23.5 5.64873 23.5 12Z"></path><path d="M7 12.6667L10.3846 16L18 8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        200,000원 이상
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="order-filter">
                            <span>총 866건</span>
                            <span>
                                <a href="#">추천순<img src="./img/spiderman-logo.png" alt=""></a>
                                <i>|</i>
                                <a href="#">신상품순</a>
                                <i>|</i>
                                <a href="#">판매량순</a>
                                <i>|</i>
                                <a href="#">혜택순</a>
                                <i>|</i>
                                <a href="#">낮은가격순</a>
                                <i>|</i>
                                <a href="#">높은가격순</a>
                            </span>
                        </div>
                        <ul id="product">
                            <!-- <li>
                                <div class="col-gap">
                                    <div class="wrap">
                                        <div class="img-box">
                                            <img src="./img/new/피규어/farfromhome1.jpg" alt="">
                                            <div class="option">
                                                <a href="#"><img src="./img/icon_201704041846597800.png" alt="장바구니아이콘">장바구니</a>
                                                <a href="#"><img src="./img/list_blank1.png" alt="새창으로상품보기아이콘">상품보기</a>
                                                <button class="heart_btn1"><img src="./img/heart.png" alt="찜하기">관심상품</button>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h5>어메이징 스파이더맨2 <span>(기본슈트)</span></h5>
                                            <h3><strong>20%</strong><em>286400원</em></h3>
                                            <h3><s>385800원</s></h3>
                                            <h4>
                                                <strong>Amazing</strong>
                                                <strong>spiderman</strong>
                                            </h4>
                                            <h6>피규어 추천상품</h6>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                        <div class="pagination">
                            <a href="#"><img src="./img/page_first.png" alt=""></a>
                            <a href="#"><img src="./img/page_back.png" alt=""></a>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><img src="./img/page_next.png" alt=""></a>
                            <a href="#"><img src="./img/page_end.png" alt=""></a>
                        </div>
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

<script src="./js/new_product.js"></script>    
<script src="./js/category.js"></script>    
<script src="<?=$path?>js/modal.js"></script>    
<script src="<?=$path?>js/header.js"></script>    
<script src="<?=$path?>js/quick_menu.js"></script>    
<script src="<?=$path?>js/go_top.js"></script> 

</body>
</html>