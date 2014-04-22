(function() {
  $(document).ready(function() {
    $(function() {
      var BV;
      BV = new $.BigVideo();
      BV.init();
      BV.show("/app/themes/cutnado/assets/vid/home-1.mp4");
    });
    return $(function() {
      var BV;
      BV = new $.BigVideo({
        useFlashForFirefox: false
      });
      BV.init();
      BV.show("/app/themes/cutnado/assets/vid/home-1.mp4", {
        altSource: "/app/themes/cutnado/assets/vid/home-1.ogv"
      });
    });
  });

}).call(this);

//# sourceMappingURL=_front-page.js.map
