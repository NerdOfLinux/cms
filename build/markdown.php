<?php
$md_file = '';
if ( is_file( "$page_file.md" ) ) {
    $md_file = "$page_file.md";
} else if ( is_file( "$page_file/index.md" ) ) {
    $md_file = "$page_file/index.md";
}

// Check for cache
$md_cache_file = create_cache_file_name( $md_file );
$page_arr = [];
if ( is_file( $md_cache_file ) && filemtime( $md_cache_file ) >= filemtime( $md_file ) ) {
    $page_arr = read_cache_file( $md_file );
}
if ( empty( $page_arr ) ) {
    $full_contents = file_get_contents( $md_file );
    // Extract the YAML
    $page_data = yaml_parse( explode( '---', $full_contents, 3 )[1] );
    // Array to vars
    extract( $page_data );
    // Get the header
    get_header();
    // Get the rest of the content
    $md = explode( '---', $full_contents, 3 )[2];
    // Parse the markdown
    $html =  md_parse( $md );
    echo $html;
    // Get the footer
    get_footer();

    // Generate cache
    write_cache_file( $md_file, array(
        'yaml' => $page_data,
        'html' => $html
    ) );

} else {
    // Use the cache
    extract( $page_arr['yaml'] );
    get_header();
    echo $page_arr['html'];
    get_footer();
}

?>
