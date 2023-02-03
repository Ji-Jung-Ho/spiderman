(function($,window){

  const spiderman = {
      init:function(){
          this.section1();
          this.section2();
          this.section3();
          this.section4();
          this.section5();
      },
      section1: function(){
        let cnt = 0;
        let setId = 0;
        // 선택자 변수 $접두어 사용
        const $s1SlideWrap      = $('#section1 .slide-wrap');
        const $s1Slide          = $('#section1 .sl');
        const $s1CountNumber    = $('#section1 .count-number');
        const $s1TotalNumber    = $('#section1 .total-number');
        const $s1SlideContainer = $('#section1 .slide-container');
        const $s1NextBtn        = $('#section1 .next-btn');
        const $s1PrevBtn        = $('#section1 .prev-btn');
        const n                 = $('#section1 .slide').length-2;

        // localhost/kurly_1214__5기/
        // alert(n);

        mainSlide();  //로딩시 곧바로 실행

        //1. 메인슬라이드 함수
        function mainSlide(){
            $s1SlideWrap.animate({left: -100 * cnt + '%'},500, 'easeInQuart', function(){
                if (cnt === 11) {
                    cnt = 0;
                    $s1SlideWrap.animate({left: -100 * cnt + '%'},0);
                }
      
                if (cnt === -1) {
                    cnt = 10;
                    $s1SlideWrap.animate({left: -100 * cnt + '%'},0);
                }
            });
      
            let total = $s1Slide.length - 2;
            $s1CountNumber.text(cnt === 11 ? 1 : (cnt + 1 === 0 ? 11 : cnt + 1));
            $s1TotalNumber.text(total);
        };

        //2. 다음(next)카운트 함수
        function nextCount(){
            cnt++; //1 2 3 ....
            mainSlide();
        }
        //2. 이전(preiew)카운트 함수
        function prevCount(){
            cnt--; //1 2 3 ....
            mainSlide();
        }


        //3. 자동타이머 함수
        function autoTimer(){
            clearInterval( setId );
            setId = setInterval(nextCount, 3000); //3초 뒤에서 다음카운트 함수 호출 계속(포에버)
        }
        autoTimer();

        //4. 슬라이드 컨테이너(선택자 .slide-container) 박스 위에 마우스 올리면(mouseenter) 
        //   슬라이드 일시정지(clearInterval(1))
        //   마우스가 떠나면 슬라이드 타이머함수 실행
        $s1SlideContainer.on({
            mouseenter: function(){
                clearInterval( setId );  //타이머지 일시정지
                $s1NextBtn.stop().fadeIn(1000);
                $s1PrevBtn.stop().fadeIn(1000);                   
            },
            mouseleave: function(){
                autoTimer(); //자동타이머 함수 호출 실행
                $s1NextBtn.stop().fadeOut(1000);
                $s1PrevBtn.stop().fadeOut(1000);
            }
        })

        //5-1. 다음화살버튼(next-btn) 클릭(click) 이벤트 : 다음슬라이드 구현
        //5-2. 빠른속도로 클릭하면 클릭한 횟수대로 애니메이션이 진행이 된다.
        //   이미지 애니메이션이 진행중인경우에도 클릭되어 버그가 발생한다.
        //   그래서 애니메이션이 진행안될때만 클릭을 가능하게 해준다.
        //   오류 없다.(디버깅 ==> 오류수정)
        $s1NextBtn.on({
            click: function(e){
                e.preventDefault();
                // 애니메이션 진행 중이면 true
                // 애니메이션 진행 중이 아니면 false                   
                if( $s1SlideWrap.is(':animated')===false ){
                    nextCount();
                }

            }
        });

        //5. 이전화살버튼(next-btn) 클릭(click) 이벤트 : 이전슬라이드 구현
        $s1PrevBtn.on({
            click: function(e){
                e.preventDefault();
                if ( $s1SlideWrap.is(':animated')===false  ){
                    prevCount();
                }
            }
        });

        // 터치 스와이프 : 오른족에서 왼쪽으로 터치하면 다음슬라이드
        // 터치 스와이프 : 왼족에서 오른쪽으로 터치하면 이전슬라이드
        let touchStart = null;
        let touchEnd = null;
        let dragStart = null;
        let dragEnd = null;
        let mouseDown = false;
        let winW = $(window).innerWidth();
       
        $s1SlideContainer.on({
            mousedown(e){
                clearInterval(setId);
                winW = $(window).innerWidth();
                touchStart = e.clientX;
                dragStart = e.clientX - $s1SlideWrap.offset().left-winW;
                mouseDown = true;
            },
            mouseup(e){
                touchEnd = e.clientX;
                if( touchStart - touchEnd > 0){
                    nextCount();
                }
                if( touchStart - touchEnd < 0){
                    prevCount();
                }
                mouseDown = false;
            },
            mouseleave(e){
                touchEnd = e.clientX;
                autoTimer();
                mouseDown = false;
            },
            mousemove(e){
                if(mouseDown===false) return;
                dragEnd = e.clientX;
                $s1SlideWrap.css({left: dragEnd-dragStart});
            }    
        });

        $s1SlideContainer.on({
            touchstart(e){
                clearInterval(setId);
                winW = $(window).innerWidth();
                touchStart = e.originalEvent.changedTouches[0].clientX;
                dragStart = e.originalEvent.changedTouches[0].clientX - $s1SlideWrap.offset().left-winW;
                mouseDown = true;
            },
            touchend(e){
                touchEnd = e.originalEvent.changedTouches[0].clientX;
                if( touchStart - touchEnd > 0){
                    nextCount();
                }
                if( touchStart - touchEnd < 0){
                    prevCount();
                }
                mouseDown = false;
            },
            touchmove(e){
                if(mouseDown===false) return;
                dragEnd = e.originalEvent.changedTouches[0].clientX;
                $s1SlideWrap.css({left: dragEnd-dragStart});
            }    
        });

    },
      section2:function(){
          let cnt = 0;

          const $s2NextBtn    = $('#section2 .next-btn')
          const $s2PrenBtn    = $('#section2 .prev-btn')
          const $s2SlideWrap  = $('#section2 .slide-wrap')
          
          // 1. 메인슬라이드 함수 생성
          function mainSlide(){
              if (cnt >= 2) {
                  cnt = 2
                  // 다음 버튼 숨김
                  $s2NextBtn.stop().fadeOut(300);
              }
              else {
                  // 다음 버튼 보임
                  $s2NextBtn.stop().fadeIn(300);
              }

              if (cnt <= 0) {
                  cnt = 0
                  // 이전 버튼 숨김
                  $s2PrenBtn.stop().fadeOut(300);
              }

              else {
                  // 이전 버튼 보임
                  $s2PrenBtn.stop().fadeIn(300);
              }

              $s2SlideWrap.stop().animate({left: -100 * cnt + '%'},600);
          }

          mainSlide();        // 로딩 시 1회 실행

          // 2. 다음 카운트 함수 생성
          function nextCount(){
              cnt++;
              mainSlide();

          }
          // 2. 이전 카운트 함수 생성
          function prevCount(){
              cnt--;
              mainSlide();

          }

          // 3. 다음 버튼 클릭 이벤트 생성
          $s2NextBtn.on({
              click:function(e){
                  e.preventDefault();
                  nextCount();
              },
              mouseenter:function(){
                  // 다음 버튼에 마우스 올리면 다음 버튼 이미지를 보라색 이미지로 변경
                  $(this).attr('src', './img/arrow_perple.svg');
              },
              mouseleave:function(){
                  $(this).attr('src', './img/arrow_white.svg');
              }
          });
          // 3. 이전 버튼 클릭 이벤트 생성
          $s2PrenBtn.on({
              click:function(e){
                  e.preventDefault();
                  prevCount();
              },
              mouseenter:function(){
                  // 다음 버튼에 마우스 올리면 다음 버튼 이미지를 보라색 이미지로 변경
                  $(this).attr('src', './img/arrow_perple.svg');
              },
              mouseleave:function(){
                  $(this).attr('src', './img/arrow_white.svg');
              }
          });

      },
      section3:function(){
          let cnt = 0;

          const $s3NextBtn    = $('#section3 .next-btn')
          const $s3PrenBtn    = $('#section3 .prev-btn')
          const $s3SlideWrap  = $('#section3 .slide-wrap')
          
          // 1. 메인슬라이드 함수 생성
          function mainSlide(){
              if (cnt >= 2) {
                  cnt = 2
                  // 다음 버튼 숨김
                  $s3NextBtn.stop().fadeOut(300);
              }
              else {
                  // 다음 버튼 보임
                  $s3NextBtn.stop().fadeIn(300);
              }

              if (cnt <= 0) {
                  cnt = 0
                  // 이전 버튼 숨김
                  $s3PrenBtn.stop().fadeOut(300);
              }

              else {
                  // 이전 버튼 보임
                  $s3PrenBtn.stop().fadeIn(300);
              }

              $s3SlideWrap.stop().animate({left: -100 * cnt + '%'},600);
          }

          mainSlide();        // 로딩 시 1회 실행

          // 2. 다음 카운트 함수 생성
          function nextCount(){
              cnt++;
              mainSlide();

          }
          // 2. 이전 카운트 함수 생성
          function prevCount(){
              cnt--;
              mainSlide();

          }

          // 3. 다음 버튼 클릭 이벤트 생성
          $s3NextBtn.on({
              click:function(e){
                  e.preventDefault();
                  nextCount();
              },
              mouseenter:function(){
                  // 다음 버튼에 마우스 올리면 다음 버튼 이미지를 보라색 이미지로 변경
                  $(this).attr('src', './img/arrow_perple.svg');
              },
              mouseleave:function(){
                  $(this).attr('src', './img/arrow_white.svg');
              }
          });
          // 3. 이전 버튼 클릭 이벤트 생성
          $s3PrenBtn.on({
              click:function(e){
                  e.preventDefault();
                  prevCount();
              },
              mouseenter:function(){
                  // 다음 버튼에 마우스 올리면 다음 버튼 이미지를 보라색 이미지로 변경
                  $(this).attr('src', './img/arrow_perple.svg');
              },
              mouseleave:function(){
                  $(this).attr('src', './img/arrow_white.svg');
              }
          });

      },
      section4:function(){
          let cnt = 0;

          const $s4NextBtn    = $('#section4 .next-btn')
          const $s4PrenBtn    = $('#section4 .prev-btn')
          const $s4SlideWrap  = $('#section4 .slide-wrap')
          
          // 1. 메인슬라이드 함수 생성
          function mainSlide(){
              if (cnt >= 2) {
                  cnt = 2
                  // 다음 버튼 숨김
                  $s4NextBtn.stop().fadeOut(300);
              }
              else {
                  // 다음 버튼 보임
                  $s4NextBtn.stop().fadeIn(300);
              }

              if (cnt <= 0) {
                  cnt = 0
                  // 이전 버튼 숨김
                  $s4PrenBtn.stop().fadeOut(300);
              }

              else {
                  // 이전 버튼 보임
                  $s4PrenBtn.stop().fadeIn(300);
              }

              $s4SlideWrap.stop().animate({left: -100 * cnt + '%'},600);
          }

          mainSlide();        // 로딩 시 1회 실행

          // 2. 다음 카운트 함수 생성
          function nextCount(){
              cnt++;
              mainSlide();

          }
          // 2. 이전 카운트 함수 생성
          function prevCount(){
              cnt--;
              mainSlide();

          }

          // 3. 다음 버튼 클릭 이벤트 생성
          $s4NextBtn.on({
              click:function(e){
                  e.preventDefault();
                  nextCount();
              },
              mouseenter:function(){
                  // 다음 버튼에 마우스 올리면 다음 버튼 이미지를 보라색 이미지로 변경
                  $(this).attr('src', './img/arrow_perple.svg');
              },
              mouseleave:function(){
                  $(this).attr('src', './img/arrow_white.svg');
              }
          });
          // 3. 이전 버튼 클릭 이벤트 생성
          $s4PrenBtn.on({
              click:function(e){
                  e.preventDefault();
                  prevCount();
              },
              mouseenter:function(){
                  // 다음 버튼에 마우스 올리면 다음 버튼 이미지를 보라색 이미지로 변경
                  $(this).attr('src', './img/arrow_perple.svg');
              },
              mouseleave:function(){
                  $(this).attr('src', './img/arrow_white.svg');
              }
          });

      },
      section5:function(){
          let cnt = 0;

          const $s5NextBtn    = $('#section5 .next-btn')
          const $s5PrenBtn    = $('#section5 .prev-btn')
          const $s5SlideWrap  = $('#section5 .slide-wrap')
          
          // 1. 메인슬라이드 함수 생성
          function mainSlide(){
              if (cnt >= 2) {
                  cnt = 2
                  // 다음 버튼 숨김
                  $s5NextBtn.stop().fadeOut(300);
              }
              else {
                  // 다음 버튼 보임
                  $s5NextBtn.stop().fadeIn(300);
              }

              if (cnt <= 0) {
                  cnt = 0
                  // 이전 버튼 숨김
                  $s5PrenBtn.stop().fadeOut(300);
              }

              else {
                  // 이전 버튼 보임
                  $s5PrenBtn.stop().fadeIn(300);
              }

              $s5SlideWrap.stop().animate({left: -100 * cnt + '%'},600);
          }

          mainSlide();        // 로딩 시 1회 실행

          // 2. 다음 카운트 함수 생성
          function nextCount(){
              cnt++;
              mainSlide();

          }
          // 2. 이전 카운트 함수 생성
          function prevCount(){
              cnt--;
              mainSlide();

          }

          // 3. 다음 버튼 클릭 이벤트 생성
          $s5NextBtn.on({
              click:function(e){
                  e.preventDefault();
                  nextCount();
              },
              mouseenter:function(){
                  // 다음 버튼에 마우스 올리면 다음 버튼 이미지를 보라색 이미지로 변경
                  $(this).attr('src', './img/arrow_perple.svg');
              },
              mouseleave:function(){
                  $(this).attr('src', './img/arrow_white.svg');
              }
          });
          // 3. 이전 버튼 클릭 이벤트 생성
          $s5PrenBtn.on({
              click:function(e){
                  e.preventDefault();
                  prevCount();
              },
              mouseenter:function(){
                  // 다음 버튼에 마우스 올리면 다음 버튼 이미지를 보라색 이미지로 변경
                  $(this).attr('src', './img/arrow_perple.svg');
              },
              mouseleave:function(){
                  $(this).attr('src', './img/arrow_white.svg');
              }
          });

      }
  }

  spiderman.init();

})(jQuery,window);