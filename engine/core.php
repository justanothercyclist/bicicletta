<?php


/* Trim strings and add ellipsis */
function jacbt_truncate_string( $text, $width, $elips = '...' ) {
  $trun_width = $width - strlen( $elips );
  // Force a minimum width here for sanity, else a really
  // long $elips could result in negative $trun_width
  if ( $trun_width < strlen( $elips) + 5 ) {
    $trun_width = strlen( $elips) + 5;
  }
  $text_out = $text;
  if ( strlen( $text ) > $width ) {
    $text_out = substr( $text, 0, $trun_width ) . $elips;
  }
  return $text_out;

}

/* Convert hex RGBA + alpha valie into rgba output */
function jacbt_hex_to_rgba( $in_hex, $in_alpha, $return = False ) {
  $a = $in_alpha / 100;
  list($r, $g, $b) = sscanf( $in_hex, "#%2x%2x%2x" );
  $color = "rgba( $r, $g, $b, $a )";
  if ( $return ) {
    return $color;
  }
  echo $color;
}

?>