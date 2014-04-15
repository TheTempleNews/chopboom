$(document).ready ->
  $ ->
    BV = new $.BigVideo()
    BV.init()
    BV.show "/app/themes/cutnado/assets/vid/home-1.mp4"
    return

  $ ->
    BV = new $.BigVideo(useFlashForFirefox: false)
    BV.init()
    BV.show "/app/themes/cutnado/assets/vid/home-1.mp4,
      altSource: "/app/themes/cutnado/assets/vid/home-1.ogv"

    return

