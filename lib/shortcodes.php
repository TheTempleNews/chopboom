<?php

add_shortcode( 'sup', 'ttn_shortcode_sup' );

function ttn_shortcode_sup( $atts , $content = null ) {
  // Attributes
  extract( shortcode_atts(
    array(
      'type'     => '',
      'position' => 'right',
      'size'     => 'lg',
      'id'       => '46154142',
      'caption'  => ''
    ), $atts )
  );

  // If type is not specified, output null
  if (!$type) {
    return;
  }

  $output    = '';
  $sup_grafs  = '';

  // Build the running text structure.
  //
  // This wraps the `$content` if the shortcode actually wraps around a
  // paragraph in the WordPress post editor.
  if ($content) {
    $sup_grafs .= '<div class="sup__grafs">';
      $sup_grafs .= $content;
    $sup_grafs .= "</div>";
  }

  $types_avail = array(
                       'video',
                       'quote'
                      );


  $output .= "<div class=\"sup-{$type} sup--{$position} sup--{$size} sup\">";

  // If the Sup content is to be displayed to the right of the running text
  // (`$sup_grafs`), then output the running text before the Sup content.
  // If not, then output it after the Sup content.
  if ($position === 'right') {
    $output .= $sup_grafs;
    $sup_grafs = null;
  }

  $output .= '<figure class="sup__content wp-caption">';

    // Video: Embed using Vimeo ID specified in shortcode attribute
    ($type === 'video') ? $output .= ttn_embed_vimeo($id) : null;

    if ($caption) {
      // If a caption attribute is specified, set it up in a `<figcaption>` now
      $output .= '<figcaption class="sup__content__caption caption wp-caption-text">';
        $output .= $caption;
      $output .= '</figcaption>';
    }
    $output .= "</figure>";

  // Output the running text now, if it hasn't happened already
  if ($position === 'center' || $position === 'left' && $sup_grafs) {
    $output .= $sup_grafs;
    $sup_grafs = null;
  }

  // Close the `.sup`
  $output .= '</div>';

  return $output;
}
