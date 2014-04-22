$(document).ready ->
  $ ->
    BV = new $.BigVideo(useFlashForFirefox: false)
    BV.init()
    BV.show "/app/themes/cutnado/assets/vid/home-1.mp4",
      altSource: "/app/themes/cutnado/assets/vid/home-1.ogv"
      ambient: true
    return

