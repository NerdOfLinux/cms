<?php
// Get rid of query string
$page_file = "$document_root/pages" . dirname( urldecode( $request_uri ) ) . '/' . basename( urldecode( $request_uri ) );
if ( is_file( "$page_file.php" ) ) {
    include "$page_file.php";
} else if ( is_file( "$page_file/index.php" ) ) {
    include "$page_file/index.php";
} else if ( is_file ( "$page_file.md" ) || is_file( "$page_file/index.md" ) ) {
    include __DIR__ . '/markdown.php';
} else {
    // 404 Error
    http_response_code( 404 );
    $page_file = "$document_root/pages/errors/404";
    include __DIR__ . '/markdown.php';
}
?>
