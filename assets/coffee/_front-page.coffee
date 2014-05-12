$(document).ready ->
  $ ->
    isTouch = Modernizr.touch

    if !isTouch
      BV = new $.BigVideo(useFlashForFirefox: false)
      BV.init()
      BV.show "/app/themes/cutnado/assets/vid/home.mp4",
        altSource: "/app/themes/cutnado/assets/vid/home.ogv"
        ambient: true
      return

