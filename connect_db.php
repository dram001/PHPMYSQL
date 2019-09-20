<?php

$dbc = mysqli_connect ( 'localhost', 'mike', '1211', 'site_db' )

OR die ( mysqli_connect_error() ) ;

mysqli_set_charset( $dbc, 'utf8' ) ;

?>
