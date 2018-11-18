
<?php
// Generate the cache filename
function create_cache_file_name( $key = null ) {
    if ( !isset( $key ) ) {
        $key = rand_hex( 64 );
    }
    $key = md5( $key );
    return $GLOBALS['document_root'] . "/cache/$key";
}
// Alias
function create_cache_filename( $key = null ) {
    return create_cache_file_name( $key );
}

// This function creates a cache file
// Hand it any key, and it will create and return a file with the name being the md5 hash
function create_cache_file( $key = null ) {
    global $document_root;
    $cache_file = create_cache_file_name( $key );
    // If the cache directory does not exist, then create it along with a .htaccess file to deny access
    if ( ! is_file( $document_root . '/cache' ) ) {
        $generate_htaccess = True;
    }
    make_dir( dirname( $cache_file ) );
    if ( isset( $generate_htaccess ) && $generate_htaccess == True ) {
        file_put_contents( $document_root . '/cache/.htaccess', 'Deny from all' );
    }
    return $cache_file;
}

function write_cache_file( $key = null, $contents = null ) {
    $cache_file = create_cache_file( $key );
    file_put_contents( $cache_file, json_encode( $contents ) );
}
// Read the cache file
function read_cache_file( $key = null ) {
    $cache_file = create_cache_file_name( $key );
    if ( is_file( $cache_file ) ) {
        return json_decode( file_get_contents( $cache_file ), true );
    }
}
?>
