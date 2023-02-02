(($)=>{

  const NewProduct = {
    init(){
      this.mainFn();
    },
    mainFn(){
      let txt = '';

      $.ajax({
          url:'./data/product.json',
          dataType:'JSON',
          success(res){

            // 숫자 3자리 마다 , 찍는 정규표현식 만들기
            function commaRegExp (z){
                let str = z.toString();
                const regExp = /(^\d+)(\d{3})/;

                while (regExp.test(str) === true) {
                  str = str.replace(regExp, '$1,$2');
                }
                return str;
            }
            res.product.map(function(item, idx){
              const {상품코드, 상품이미지, 상품명, 상품세부정보, 클래스, 스파이더맨이름, 영화제목, 추천상품, 할인율, 정가} = item;
              txt += `<li datakey='${상품코드}'>`;
              txt += `  <div class="col-gap">`;
              txt += `      <div class="wrap">`;
              txt += `          <div class="img-box">`;
              txt += `              <img src="${상품이미지}" alt="">`;
              txt += `              <div class="option">`;
              txt += `                  <a href="#"><img src="./img/icon_201704041846597800.png" alt="장바구니아이콘">장바구니</a>`;
              txt += `                  <a href="#"><img src="./img/list_blank1.png" alt="새창으로상품보기아이콘">상품보기</a>`;
              txt += `                  <button class=${클래스}><img src="./img/heart.png" alt="찜하기">관심상품</button>`;
              txt += `              </div>`;
              txt += `          </div>`;
              txt += `            <div class="caption">`;
              txt += `                <h5>${상품명} <span>${상품세부정보}</span></h5>`;
              txt += `                <h3>
                                        ${
                                          할인율 > 0 ? `<strong>${Math.round(할인율*100)}%</strong>` : ``
                                        }
                                          <em>${commaRegExp(Math.round(정가*(1-할인율)))}원</em>
                                      </h3>`;
              할인율 > 0 ? (txt += `<h3><s>${commaRegExp(정가)}원</s></h3>`) : ''
              
              txt += `                <h4>`;
              txt += `                    <strong>${스파이더맨이름}</strong>`;
              txt += `                    <strong>${영화제목}</strong>`;
              txt += `                </h4>`;
              txt += `                <h6>${추천상품}</h6>`;
              txt += `            </div>`;
              txt += `        </div>`;
              txt += `    </div>`;
              txt += `</li>`;
            });

            $('#product').append(txt);

            const $button = $('.option button');

            $button.on({
              click(e){
                e.preventDefault();

                // 클릭할때마다 active 클래스 추가 및 삭제
                $(this).toggleClass('active');
    
                // button 요소에 active 클래스가 있을 시
                if($(this).hasClass('active')) {
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
          error(err){
            console.log(err);
          }
      });
    }
  }
  NewProduct.init();
    
  })(jQuery);