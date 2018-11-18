<?php
// URL-related vars
// These are inspired by NGINX
$yaml_scheme = null;
if ( isset( $scheme ) ) {
    $yaml_scheme = $scheme;
}
$scheme = '';
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) ) {
    $scheme = $_SERVER['HTTP_X_FORWARDED_PROTO'];
} else {
    $scheme = $_SERVER['REQUEST_SCHEME'];
}
$host = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];
$base_url = "$scheme://$host";
$current_url = "$base_url$request_uri";
if ( !isset( $yaml_scheme ) ) {
    $yaml_scheme = $scheme;
}

// Alias
if ( !isset( $domain ) ) {
    $domain = $host;
}

if ( $debug != false ) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}
// Redirect
if ( $scheme != $yaml_scheme ) {
    header( "Location: $yaml_scheme://$host$request_uri", true, 301 );
}
?>
