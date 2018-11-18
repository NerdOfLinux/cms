<?php
$config_file = "$document_root/config.yaml";
$config_cache_file = create_cache_file_name( $config_file );
// Create empty array for good measure
$config_arr = [];
// Check if cache file already exists
if ( is_file( $config_cache_file ) && filemtime( $config_cache_file ) >= filemtime( $config_file ) ) {
    $config_arr = read_cache_file( $config_file );
} else {
    // Parse & cache the config
    $config_arr = yaml_parse( file_get_contents( $config_file ) );
    write_cache_file( $config_file, $config_arr );
}
extract( $config_arr );
?>
