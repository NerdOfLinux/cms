<?php
// Load all other files in the current directory
function loop_include( $dir = __DIR__ ) {
    global $loaded_func_files;
    foreach ( glob("$dir/*.php") as $file ) {
        $file = realpath( $file );
        if ( $file == __FILE__ ) {
            continue;
        }
        if ( is_file( $file ) && !in_array( $file, $loaded_func_files ) ) {
            $loaded_func_files[] = $file;
            include $file;
        }
    }
}
?>
