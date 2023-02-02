(($) => {
  const amazing = {
    init() {
      this.heartFn();
    },
    // 찜하기 이미지 변경 클릭 이벤트
    heartFn() {
      const $heartBtn = $(".heart_btn");
      const $heartImg = $(".heart_img");

      let num = 0;
      let imgName = ["heart", "heart_click"];
      $heartBtn.click(function () {
        if (num == 1) num = 0;
        else num++;
        $heartImg.attr("src", "./img/" + imgName[num] + ".png");
      });
    },
  };
  amazing.init();
})(jQuery);
