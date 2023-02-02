(($)=>{

    const SignUp = {
        회원: {
            아이디          :'',            // string
            아이디중복확인  :false,         // boolean
            비밀번호        :'',            // string
            비밀번호확인    :'',            // string
            이름            :'',            // string
            이메일          :'',            // string
            이메일중복확인  :false,         // boolean
            휴대폰          :'',            // number
            휴대폰인증확인  :false,         // boolean
            주소1           :'',            // string
            주소2           :'',            // string
            성별            :'',            // string
            생년            :'',            // number
            생월            :'',            // number
            생일            :'',            // number
            추가입력사항    :'',            // string
            이용약관동의    :''             // string
        },
        init(){
            this.idMethod();                    // 1. 아이디
            this.pwMethod();                    // 2. 비밀번호
            this.nameMethod();                  // 3. 이름
            this.emailMethod();                 // 4. 이메일
            this.hpMethod();                    // 5. 휴대폰
            this.addrMethod();                  // 6. 주소
            this.genderMethod();                // 7. 성별
            this.birthMethod();                 // 8. 생년월일
            this.addInputMethod();              // 9. 추가입력사항
            this.agreetotermsofuseMethod();     // 10. 이용약관동의
            this.submitMethod();                // 11. 전송(가입하기)
        },
        idMethod(){                     // 아이디 메서드
            // 아이디 입력 제한 조건
            // 1. 특수문자 입력과 동시에 삭제
            // 2. (.)문자 6자이상 16자 이하 (마침표(.) = 문자를 의미)
            // 3. 영문 혹은 영문과 숫자를 조합
            // 4. 공백제외
            const that = this;
            const $inputId = $('#signUp #inputId');             // 아이디 입력상자
            const $errorMessage1 = $('.error-message1')         // 아이디 입력상자
            const $errorMessage2 = $('.error-message2')         // 아이디 입력상자
            const $idOkBtn = $('#signUp .id-ok-btn');           // 아이디 중복확인 버튼

            // 아이디 입력상자 keyup 이벤트 특수문자 입력되면 삭제
            $inputId.on({
                keyup(){

                    // 정규 표현식
                    const regExp1 = /[`~!@#$%^&*()\-_=+\\|\[\]{};:'",<.>/?]/g;                                  // 특수문자 입력과 동시에 삭제
                    const regExp2 = /.{6,16}/g;                                                                 // 6자이상 16자 이하
                    const regExp3 = /(?=.*[A-Za-z])+(?=.*[0-9])*/g;                                             // 영문 혹은 영문과 숫자를 조합
                    const regExp4 = /\s/g;                                                                      // 공백제외
                    const regExp5 = /([a-zA-Z0-9])+([ㄱ-ㅎ|ㅏ-ㅣ|가-힣])|([ㄱ-ㅎ|ㅏ-ㅣ|가-힣])+([a-zA-Z0-9])/;  // 영문/숫자 앞에 한글이 한글자 이상, 한글 뒤에 영문/숫자가 한글자 이상

                    let thisVal = $(this).val();
                    // 특수문자 입력 시 삭제
                    $inputId.val(thisVal.replace(regExp1,''));
                    
                    // 에러메시지 구현 (regExp2,3,4에 해당되는 조건에 따라 에러메시지 출현)
                    if ( regExp2.test(thisVal) === false || regExp3.test(thisVal) === false || regExp4.test(thisVal) === true) {
                        $errorMessage1.addClass('on').text('6자 이상 16자 이하의 영문 혹은 영문과 숫자(공백제외)를 조합');
                    }
                    else if (regExp5.test(thisVal) === true) {
                        $errorMessage2.addClass('on').text('한글 입력 불가');
                        $errorMessage1.removeClass('on');
                    }
                    else {
                        $errorMessage1.removeClass('on');
                        $errorMessage2.removeClass('on');
                        // that.회원.아이디 = thisVal;  중복버튼은 무조건 눌러야되므로 중복버튼 이벤트에서 저장
                    }
                }
            });

            // 중복확인 버튼 클릭 이벤트

            $idOkBtn.on({
                click(e){
                    e.preventDefault();
                    const regExp2 = /.{6,16}/g;                                                                 // 6자이상 16자 이하
                    const regExp3 = /(?=.*[A-Za-z])+(?=.*[0-9])*/g;                                             // 영문 혹은 영문과 숫자를 조합
                    const regExp4 = /\s/g;                                                                      // 공백제외
                    const regExp5 = /([a-zA-Z0-9])+([ㄱ-ㅎ|ㅏ-ㅣ|가-힣])|([ㄱ-ㅎ|ㅏ-ㅣ|가-힣])+([a-zA-Z0-9])/;  // 영문/숫자 앞에 한글이 한글자 이상, 한글 뒤에 영문/숫자가 한글자 이상

                    const thisVal = $inputId.val();
                    
                    // 중복확인 버튼 클릭 시 에러메시지 모달 출력
                    if ( regExp2.test(thisVal) === false || regExp3.test(thisVal) === false || regExp4.test(thisVal) === true) {
                        $('#confirmModal').fadeIn(300);
                        $('#confirmModal h2').text('6자 이상 16자 이하의 영문 혹은 영문과 숫자(공백제외)를 조합');
                    }
                    else if (regExp5.test(thisVal) === true) {
                        $('#confirmModal').fadeIn(300);
                        $('#confirmModal h2').html('아이디에 한글을 사용할 수 없습니다. <br> 영문 혹은 영문과 숫자를 조합');
                    }
                    else {
                        // 추후 중복 검사 추가 (로켈스트레이지에 저장 하고)
                        $('#confirmModal').fadeIn(300);
                        $('#confirmModal h2').text('사용할 수 있는 아이디입니다.');
                        that.회원.아이디 = $inputId.val().trim();
                    }
                }
            });
            // 모달 닫기
            $('.modal-ok-btn').on({
                click(e){
                    e.preventDefault();
                    $('#confirmModal').fadeOut(300);
                }
            });

        },
        pwMethod(){                     // 비밀번호 메서드
            // 정규표현식
            // 1. 최소 10자 이상 입력
            // 2. 영문/숫자/특수문자(공백 제외)만 허용하며, 2개 이상 조합
            // 2-1. 영문/숫자 조합 | 영문/특수문자 조합 | 숫자/특수문자 조합
            // 3. 공백제외
            // 4. 동일한 숫자 3개 이상 연속 사용 불가
            const $inputPw1 = $('#signUp #inputPw1');
            const $inputPw2 = $('#signUp #inputPw2');
            const $errorMessage = $('#signUp .error-message');
            const that = this;

            $inputPw1.on({
                keyup(){
                    const regExp1 = /.{10,}/g;
                    // const regExp2 = /((?=.*[영문])+(?=.*[숫자])+) | ((?=.*[영문])+(?=.*[특수문자])+) | ((?=.*[숫자])+(?=.*[특수문자])+)/
                    const regExp2 = /((?=.*[A-Za-z])+(?=.*[0-9])+)|((?=.*[A-Za-z])+(?=.*[`~!@#$%^&*()\-_=+\\|\[\]{};:'",<.>/?])+)|((?=.*[0-9])+(?=.*[`~!@#$%^&*()\-_=+\\|\[\]{};:'",<.>/?])+)/g;
                    const regExp3 = /\s/g;
                    const regExp4 = /(\d)\1\1/g;

                    let thisVal = $(this).val();

                    // 에러메시지
                    // 정규식.test(반드시 스트링) 결과 => true or false
                    if (regExp1.test(thisVal) === false) {
                        // 10자 미만으로 오류
                        $(this).siblings($errorMessage)
                            .text('최소 10자 이상 입력')
                            .addClass('on');
                    }
                    else if (regExp2.test(thisVal)===false || regExp3.test(thisVal)===true) {
                        // 영문/특수문자 조합 오류, 영문/숫자 조합 오류, 숫자/특수문자 조합 오류, 공백제외
                        $(this).siblings($errorMessage)
                               .text('영문/숫자/특수문자(공백 제외)만 허용하며, 2개 이상 조합')
                               .addClass('on');
                    }
                    else if (regExp4.test(thisVal) === true) {
                        // 동일한 숫자 3회 반복 사용 시 오류 
                        $(this).siblings($errorMessage)
                               .text('동일한 숫자 3개 이상 연속 사용 불가')
                               .addClass('on'); 
                    }
                    else {
                        // 정상
                        $(this).siblings($errorMessage )
                            .text('')
                            .removeClass('on');
                            // 정상 일때 데이터값을 저장해라
                            that.회원.비밀번호 = $inputPw1.val().trim();
                    }
                }
            });

            // 비밀번호 확인
            // $inputPw1과 같은 값
            $inputPw2.on({
                keyup(){
                    if ($inputPw1.val() !== $(this).val()) {
                        $(this).next()
                               .text('동일한 비밀번호를 입력')
                               .addClass('on');
                    }
                    else {
                        $(this).next()
                               .text('')
                               .removeClass('on');
                               that.회원.비밀번호확인 = $inputPw2.val().trim();
                    }
                }
            });

        },
        nameMethod(){                   // 이름 메서드
            //정규표현식
            // 1. 특수문자 입력과 동시에 삭제 (replace() 사용)
            // 2. 공백 시 이름을 입력해 주세요. 메시지 출력

            const $inputName = $('#signUp #inputName');
            const that = this;

            $inputName.on({
                keyup(){
                    const regExp = /[`~!@#$%^&*()\-_=+\\|\[\]{};:'",<.>/?]/g;

                    $(this).val($(this).val().replace(regExp, ''));

                    if ($(this).val() === '') {
                        $(this).next().text('이름을 입력해 주세요.').addClass('on');
                    }
                    else {
                        $(this).next().text('').removeClass('on');
                        that.회원.이름 = $inputName.val().trim();
                    }
                }
            });


        },
        emailMethod(){                  // 이메일 메서드
            // 정규표현식
            // 영문/숫자/특수문자
            // 특수문자 제외 @ ( ) \ [ ] " : ; ,
            // 공백제외

            const that = this;
            const $inputEmail = $('#signUp #inputEmail');
            const $errorMessage = $('#signUp .error-message');

            $inputEmail.on({
                keyup(){
                    const regExp1 = /\s/g;
                    const regExp2 = /^[A-Za-z0-9`~!#$%^&*\-_=+|{}'/?]+(\.)*[A-Za-z0-9`~!#$%^&*\-_=+|{}'/?]*@[A-Za-z0-9`~!#$%^&*\-_=+|{}'/?]+(\.)*[A-Za-z0-9`~!#$%^&*\-_=+|{}'/?]*\.[A-Za-z]{2,3}$/g;
                    const regExp3 = /[@\(\)\\\[\]":;,<>]/g;

                    if (regExp1.test($(this).val()) === true || regExp2.test($(this).val()) === false) {
                        $(this).next()
                               .siblings($errorMessage)
                               .text('이메일 형식으로 입력해 주세요.(공백제외)')
                               .addClass('on');
                    }
                    else {
                        $(this).next()
                               .siblings($errorMessage)
                               .text('')
                               .removeClass('on');
                    }
                }
            });

            // 이메일 중복 확인 버튼 이벤트 구현
            const $emailOkBtn = $('#signUp .email-ok-btn');

            $emailOkBtn.on({
                click(e){
                    e.preventDefault();
                    const regExp1 = /\s/g;
                    const regExp2 = /^[A-Za-z0-9`~!#$%^&*\-_=+|{}'/?]+(\.)*[A-Za-z0-9`~!#$%^&*\-_=+|{}'/?]*@[A-Za-z0-9`~!#$%^&*\-_=+|{}'/?]+(\.)*[A-Za-z0-9`~!#$%^&*\-_=+|{}'/?]*\.[A-Za-z]{2,3}$/g;
                    const regExp3 = /[@\(\)\\\[\]":;,<>]/g;

                    if($inputEmail.val()===''){
                        $('#confirmModal').fadeIn(300);
                        $('#confirmModal h2').text('이메일을 입력해 주세요.');
                    }
                    else if( regExp1.test($inputEmail.val())===true  || regExp2.test($inputEmail.val())===false  ){
                        $('#confirmModal').fadeIn(300);
                        $('#confirmModal h2').text('이메일 형식으로 입력해 주세요.'); 
                    }
                    else {
                        $('#confirmModal').fadeIn(300);
                        $('#confirmModal h2').text('사용할 수 있는 아이디입니다.');
                        that.회원.이메일중복확인 = $(this).val().trim();
                    }
                }
            });

        },
        hpMethod(){                     // 휴대폰 메서드

        },
        addrMethod(){                   // 주소 메서드
            // 1. 주소 검색 윈도우 팝업창 만들기

            // 2. 팝업창에 주소1, 주소2 입력 상자 및 UIUX 디자인 제작

            // 3. 팝업창에서 주소 검색 API 구현

            // 4. 자식창(윈도우 팝업창)에 API에서 주소 입력상자에 바인딩 하기

            // 5. 자식창(윈도우 팝업창)에 바인딩된 주소를 부모창에 주소 전달하기
        },
        genderMethod(){                 // 성별 메서드

        },
        birthMethod(){                  // 생년월일 메서드

        },
        addInputMethod(){               // 추가입력사항 메서드

        },
        agreetotermsofuseMethod(){      // 이용약관동의 메서드

        },
        submitMethod(){                 // 전송 메서드

        },
        


        
    }
    SignUp.init();

})(jQuery);