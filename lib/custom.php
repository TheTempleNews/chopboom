<?php
/**
 * Custom functions
 */

/**
 * Return a Vimeo embed
 */
function ttn_embed_vimeo($id) {
  return '<div class="video entry-content-asset">' . wp_oembed_get('http://vimeo.com/' . $id) . '</div>';
}
