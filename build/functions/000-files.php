<?php
function make_dir( $dir = '', $mode = 0775, $recursive = true ) {
    if ( !is_dir( $dir ) ) {
        mkdir( $dir, $mode, $recursive );
    }
}
?>
