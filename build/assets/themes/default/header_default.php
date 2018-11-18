<?php
global $site_name, $stylesheet, $page_header, $title, $canonical, $scheme, $request_uri, $domain, $current_url;
if ( !isset( $page_header ) ) {
$page_header = $title;
}
?>
<!-- Built off the Bare Bootstrap theme: https://github.com/BlackrockDigital/startbootstrap-bare -->
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Load jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- Load Bootstrap JS -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title><?php echo( "$title | $site_name" ) ;?></title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
     <!-- Set canonical URL -->
     <?php
     if ( !isset( $canonical ) ) {
         $canonical = $request_uri;
         //$canonical = "$scheme://$domain$request_uri";
     } else {
         $url_arr = parse_url( $canonical );
         if ( empty( $url_arr['host'] ) ) {
             $canonical = "$scheme://$domain$canonical";
         }
     }
     echo '<link rel="canonical" href="' . $canonical . '">';
     echo "\n";
     ?>
<style>
     <?php
     display_css( 'global' );
if ( !isset( $stylesheet ) ) {
$stylesheet = 'default';
}
display_css( $stylesheet );
?>
</style>
</head>
<body>
<?php include __DIR__ . '/nav_default.php'; ?>
<!-- Page Content -->
    <div id="page">
<div class="container">
     <h1 class="text-center"> <?php echo $page_header; ?> </h1>
