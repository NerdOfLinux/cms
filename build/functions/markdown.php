<?php
function shortcode( $old, $new, $text = null ) {
    if ( !isset( $text ) ) {
        global $text;
    }
    return preg_replace( "/\[$old\]/", $new, $text );
}
function filter_shortcodes( $text ) {
    $text = shortcode( 'site_name', $GLOBALS['site_name'], $text );
    return $text;
}
function md_parse( $text ) {
    $md = new Parsedown();
    return $md->text( filter_shortcodes( $text ) );
}
?>
