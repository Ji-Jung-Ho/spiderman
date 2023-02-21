<?
    include_once('./_common.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="shortcut icon" href="<?=$path?>img/etc-img/spider-main-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <script src="<?=$path?>js/lib/jquery-1.12.4.min.js"></script>
    <script src="<?=$path?>js/lib/jquery.easing.1.3.js"></script>
    <!-- 카카오 주소 검색 API 오픈소스 -->
    <script src="./js/lib/postcode.v2.js"></script>

</head>
<body>
<div id="wrap">

<?
    include_once($path.'header.php');
?>

    <main id="main">
        <section id="signUp">
            <div class="container">
                <div class="title">
                    <div class="main-title">
                        <h2>회원가입</h2>
                    </div>
                    <div class="sub-title">
                        <span><i>*</i>필수입력사항</span>
                    </div>
                </div>
                <div class="content">
                    <form action="./member_sign_up.php" name="form_sign_up" id="formSignUp" method="post">
                        <ul>
                            <li>
                                <div class="left">
                                    <div class="left-wrap">
                                        <label for="inputId"><strong>아이디</strong><i>*</i></label>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap">
                                        <input type="text" maxLength="16" name="input_id" id="inputId" placeholder="아이디를 입력해주세요">
                                        <button type="button" class="id-ok-btn">중복확인</button>
                                        <p class="error-message1"></p>
                                        <p class="error-message2"></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <div class="left-wrap">
                                        <label for="inputPw1"><strong>비밀번호</strong><i>*</i></label>
                                    </div>                                
                                </div>
                                <div class="right">
                                    <div class="right-wrap">
                                        <input type="password" maxlength='16' name='input_pw1' id='inputPw1' autocomplete="off" placeholder='비밀번호를 입력해주세요'>
                                        <p class='error-message'></p>
                                    </div>
                                </div>
                            </li>                        
                            <li>
                                <div class="left">
                                    <div class="left-wrap">
                                        <label for="inputPw2"><strong>비밀번호확인</strong><i>*</i></label>
                                    </div>                                
                                </div>
                                <div class="right">
                                    <div class="right-wrap">
                                        <input type="password" maxlength='16' name='input_pw2' id='inputPw2' autocomplete="off" placeholder='비밀번호를 한번더 입력해주세요'>
                                        <p class="error-message"></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <div class="left-wrap">
                                        <label for="inputName"><strong>이름</strong><i>*</i></label>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap">
                                        <input type="text" required maxLength="20" name="input-name" id="inputName" placeholder="이름을 입력해주세요">
                                        <p class="error-message"></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <div class="left-wrap">
                                        <label for=""><strong>이메일</strong><i>*</i></label>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap">
                                        <input type="text" name="input-email" id="inputEmail" placeholder="예:spiderman@naver.com">
                                        <button type="button" class="email-ok-btn">중복확인</button>
                                        <p class="error-message"></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <div class="left-wrap">
                                        <label for=""><strong>휴대폰</strong><i>*</i></label>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap">
                                        <input type="text" maxLength="11" name="input-hp" id="inputHp" placeholder="아이디를 입력해주세요.">
                                        <button disabled type="button" class="hp-num-btn">인증번호 받기</button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <div class="left-wrap">
                                        <label for=""><strong>주소</strong><i>*</i></label>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap">
                                        <input type="text" class="addr-hide" maxLength="11" name="input-addr1" id="inputAddr1" placeholder="카카오 주소 검색 API">
                                        <button disabled type="button" class="addr-re-btn addr-hide"><img src="./img/ico_search.svg" alt="">재검색</button>
                                        <button type="button" class="addr-api-btn"><img src="./img/ico_1search.svg" alt="">주소검색</button>
                                        <p class="addr-info addr-info1">배송지에 따라 상품 정보가 달라질 수 있습니다.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="addr-hide">
                                <div class="left">
                                    <div class="left-wrap">
                                        
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap">
                                        <input type="text" maxLength="11" name="input-addr2" id="inputAddr2" placeholder="나머지 주소를 입력하세요">
                                    </div>
                                </div>
                            </li>
                            <li class="addr-hide">
                                <div class="left">
                                    <div class="left-wrap">
                                        
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap">
                                        <em class="addr-map-area">샛별배송</em>
                                        <p class="addr-info addr-info2">배송지에 따라 상품 정보가 달라질 수 있습니다.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <div class="left-wrap">
                                        <label for=""><strong>성별</strong></label>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap gender">
                                        <label for="male"><input type="radio" name="gender" id="male" value="남자">남자</label>
                                        <label for="female"><input type="radio" name="gender" id="female" value="여자">여자</label>
                                        <label for="unselect"><input type="radio" name="gender" id="unselect" value="선택안함" checked>선택안함</label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <div class="left-wrap">
                                        <label for=""><strong>생년월일</strong></label>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap birth">
                                        <div class="birth-box">
                                            <ul>
                                                <li><input type="text" name="year" id="year" placeholder="YYYY"></li>
                                                <li><i>/</i></li>
                                                <li><input type="text" name="month" id="month" placeholder="MM"></li>
                                                <li><i>/</i></li>
                                                <li><input type="text" name="date" id="date" placeholder="DD"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <div class="left-wrap">
                                        <label for=""><strong>추가입력 사항</strong></label>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap add-input-box1">
                                        <label for="addInput1"><input type="radio" name="add_input" id="addInput1" value="친구초대 추천인 아이디">친구초대 추천인 아이디</label>
                                        <label for="addInput2"><input type="radio" name="add_input" id="addInput2" value="참여 이벤트명">참여 이벤트명</label>
                                    </div>
                                </div>
                            </li>
                            <li class="add-input-box-list">
                                <div class="left">
                                    <div class="left-wrap">
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap add-input-box2">
                                       <input type="text" name="add-input-text" id="add-input-text" placeholder="추천인 아이디를 입력해주세요">
                                       <p class="add-input-guid-text">가입 후 7일 내 첫 주문 배송완료 시, 친구초대 이벤트 적립금이 지급됩니다.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="hor-line">
                                <hr>
                            </li>
                            
                            <li>
                                <div class="left">
                                    <div class="left-wrap">
                                        <label for=""><strong>이용약관동의</strong><i>*</i></label>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-wrap service">
                                        <ul>
                                            <li>
                                                <label for="allChk"><input type="checkbox" name="all_chk" id="allChk" class="chk-btn" value="">전체 동의합니다.</label>
                                                <p>선택항목에 동의하지 않은 경우도 회원가입 및 일반적인 서비스를 이용할 수 있습니다.</p>
                                            </li>
                                            <li>
                                                <label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk-btn" value="">이용약관 동의</label>(필수)
                                                <button type="button"><span>약관보기</span><img src="./img/arrow_right.png" alt=""></button>
                                            </li>
                                            <li>
                                                <label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk-btn" value="">개인정보 수집∙이용 동의</label>(필수)
                                                <button type="button"><span>약관보기</span><img src="./img/arrow_right.png" alt=""></button>
                                            </li>
                                            <li>
                                                <label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk-btn" value="">개인정보 수집∙이용 동의</label>(선택)
                                                <button type="button"><span>약관보기</span><img src="./img/arrow_right.png" alt=""></button>
                                            </li>
                                            <li>
                                                <label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk-btn" value="">무료배송, 할인쿠폰 등 혜택/정보 수신 동의</label>(선택)
                                            </li>
                                            <li>
                                                <label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk-btn" value="SMS">SMS</label>
                                                <label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk-btn" value="이메일">이메일</label>
                                            </li>
                                            <li>
                                                <p>동의 시 한 달간 [5%적립] + [2만원 이상 무료배송] 첫 주문 후 안내</p>
                                            </li>
                                            <li>
                                            <label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk-btn" value="">본인은 만 14세 이상입니다.</label>(필수)
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="button-box">
                            <button type="submit" class="submit-btn">가입하기</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

<?
    include_once($path.'footer.php');
?>

    <!-- 모달창 -->
    <div id="confirmModal">
        <div class="wrap">          <!-- 컨테이너 박스를 가운데 배치 시키기위해  -->
            <div class="container">
                <div class="img"></div>
                <div class="content">
                    <h2></h2>
                </div>
                <div class="button-box">
                    <button type="button" class="modal-ok-btn">확인</button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- 주소검색 스크립트 -->
<script src="./js/sign_up.js"></script>

<!-- 공용 스크립트 -->
<script src="<?=$path?>js/header.js"></script>    

</body>
</html>