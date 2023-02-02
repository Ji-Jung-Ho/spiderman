(($)=>{

    bannerFn=()=>{
  
      $.ajax({
        // 제이슨 파일의 경로
        // 파일경로:'',
        // 데이터타입:'',
        // 성공메서드:콜백함수(){},
        // 에러메서드:콜백함수(){}
        url:'./data_json/banner.json',
        dataType:'JSON',
        success(result){
          const{venom} = result;
          let txt = '';
  
          venom.map(function(item, idx, arr){
            const{번호, 제목, 이미지, 소개} = item;
             txt += `<li data-num="${번호}"><a href="#" title="${제목}"><img src="./img/${이미지}" alt="${소개}"></a></li>`;
          });
  
          // 메인4번에 베너리스트 출력
          // $('banner-list').html(txt);
          $('.banner-list').append(txt);
  
        },
        error(error){
          console.log('AJAX 실패!' + error);
        }
      });
  
    }
    bannerFn();
  })(jQuery);