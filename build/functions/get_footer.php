<?php
function get_footer( $type = 'default' ) {
    global $document_root, $theme;
    $footer_file = "$document_root/build/assets/themes/$theme/footer_$type.php";
    if ( is_file( $footer_file ) ) {
        include $footer_file;
    }
}
?>
