<!-- Nav bar -->
<nav class="navbar navbar-expand-lg navbar-light static-top minty-nav">
      <div class="container">
              <a class="navbar-brand" href="/"><?php echo $site_name; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
<?php
global $menu;
foreach ( $menu as $item ) {
    echo '<li class="nav-item">';
    $url = strtolower( preg_replace( '/ /', '-', $item ) );
    echo "<a class=\"nav-link\" href=\"$url\"> $item </a>";
    echo '</li>';
}
?>
          </ul>
        </div>
      </div>
    </nav>
