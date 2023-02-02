(($)=>{

  const Category = {
    init(){
      this.categotyFn();
    },
    categotyFn(){
      const $categoryBtn = $('.category-btn');
      const $categorySub = $('.category-sub');

      $categoryBtn.on({
        click(e){
          e.preventDefault();
          $(this).toggleClass("on");
          $(this).next().stop().slideToggle(300);
        }
      });
      // $categoryBtn.on({
      //   click(e){
      //     e.preventDefault();
      //     $categorySub.toggleClass("on");
      //     $categorySub.next().stop().slideToggle(300);
      //   }
      // });
    }
  }
  Category.init();

})(jQuery)