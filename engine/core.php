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


?>