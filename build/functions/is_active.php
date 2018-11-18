<?php
// A function that checks if the nav URL is active
function is_active( $url ) {
global $request_uri;
if ( $request_uri === $url ) {
    echo( "active" );
}
}
?>
