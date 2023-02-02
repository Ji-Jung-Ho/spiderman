(function($,window, document){

  const spiderman = {
      init:function(){
          this.ScrollFn();
          this.imgToggleFn();
      },
      ScrollFn(){
          const $window           = $(window);
          const $document         = $(document);
          const $header           = $('#header');
          const $row1             = $('#header .row1')
          const $row3             = $('#header .row3')
          const $categoryTooltip1 = $('#header .category-tooltip1')
          const $categoryTooltip2 = $('#header .category-tooltip2')

          $window.scroll(function(){
              //스클롤 발생하면 
              //현재 윈도우 스크롤 탑값을 콘솔에 찍는다
            //   console.log( $(this).scrollTop() );
              
              if( $(this).scrollTop() > 90 ){
                $header.addClass('row1');
                $(".row1-height").css({"height": "40px"});

                if( $(this).scrollTop() >= 190 ){
                    $header.addClass('row3');
                    $(".row3-height").css({"height": "70px"});
                    $categoryTooltip1.addClass("on");
                    $categoryTooltip2.addClass("on");
                    $(".home-btn").addClass('on');
                    $("#nav").css({"justify-content": "space-between"});
                }
                else{
                    $header.removeClass('row3');
                    $(".row3-height").css({"height": "0px"});
                    $categoryTooltip1.removeClass("on");
                    $categoryTooltip2.removeClass("on");
                    $(".home-btn").removeClass('on');
                    $("#nav").css({"justify-content": "space-evenly"});
                }
              }
              else{
                $header.removeClass('row1');
                $(".row1-height").css({"height": "0px"});
              }

              
          });
      },
      imgToggleFn() {
        $(".spider-man1, .spider-man2, .spider-man3").on({
            mouseenter(){
                $(this).find("img").prop("src", "./img/header/spider_black_logo.png");
            },
            mouseleave() {
                $(this).find("img").prop("src", "./img/header/spider_red_logo.png");
              },
        });

        $(".amazing-spider-man1, .amazing-spider-man2").on({
            mouseenter(){
                $(this).find("img").prop("src", "./img/header/amazing_spider_black_logo.png");
            },
            mouseleave() {
                $(this).find("img").prop("src", "./img/header/amazing_spider_red_logo.png");
              },
        });

        $(".home-comming, .far-from-home, .no-way-home").on({
            mouseenter(){
                $(this).find("img").prop("src", "./img/header/tom_spider_black_logo.png");
            },
            mouseleave() {
                $(this).find("img").prop("src", "./img/header/tom_spider_red_logo.png");
              },
        });

        $(".Venom1, .Venom2").on({
            mouseenter(){
                $(this).find("img").prop("src", "./img/header/venom_black_logo.png");
            },
            mouseleave() {
                $(this).find("img").prop("src", "./img/header/venom_red_logo.png");
              },
        });
      }
  }

  spiderman.init();

})(jQuery,window, document);