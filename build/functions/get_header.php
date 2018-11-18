<?php
function get_header( $type = 'default' ) {
    global $document_root, $theme;
    $header_file = "$document_root/build/assets/themes/$theme/header_$type.php";
    if ( is_file( $header_file ) ) {
        include $header_file;
    }
}
?>
