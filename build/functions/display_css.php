<?php
function display_css( $stylesheet = 'default' ) {
    global $document_root, $theme;
    $style_file = "$document_root/build/assets/themes/$theme/styles/$stylesheet.css";
    if ( is_file( $style_file ) ) {
        readfile( $style_file );
    }
}
?>
