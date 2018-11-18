<?php
function rand_hex( $length = 64 ) {
    return bin2hex( openssl_random_pseudo_bytes( ceil( $length / 2 ) ) );
}
?>
