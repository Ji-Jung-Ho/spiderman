(($,document) => {

      const product = {
      init() {
        this.heartFn();
      },
      // 찜하기 이미지 변경 클릭 이벤트
      heartFn() {
            const $likeBtn1 = $('.heart_btn1');
            const $likeBtn2 = $('.heart_btn2');
            const $button = $('.option button');
            const $img = $('.option button img');

            $likeBtn1.on({
                click(e){
                  e.preventDefault();
                  alert();
                  // button 클릭할때마다 active 클래스 추가 및 삭제
                  $likeBtn1.toggleClass('active');
      
                  // button 요소에 active 클래스가 있을 시
                  if($likeBtn1.hasClass('active')) {
                    // img 태그의 src, alt를 변경
                    $(this).find('img').attr({'src': './img/heart_click2.png', alt:'찜하기 완료'});
                  }
      
                  // button 요소에 active 클래스가 없을 시
                  else {
                    // img 태그의 src, alt를 변경
                    $(this).find('img').attr({'src': './img/heart.png', alt:"찜하기"})
                  }
                }
            });
            $likeBtn2.on({
                click(e){
                  e.preventDefault();

                  // button 클릭할때마다 active 클래스 추가 및 삭제
                  $likeBtn2.toggleClass('active');
      
                  // button 요소에 active 클래스가 있을 시
                  if($likeBtn2.hasClass('active')) {
                    // img 태그의 src, alt를 변경
                    $(this).find('img').attr({'src': './img/heart_click2.png', alt:'찜하기 완료'});
                  }
      
                  // button 요소에 active 클래스가 없을 시
                  else {
                    // img 태그의 src, alt를 변경
                    $(this).find('img').attr({'src': './img/heart.png', alt:"찜하기"})
                  }
                }
            });
      },
    };
    product.init();

})(jQuery, document);
  