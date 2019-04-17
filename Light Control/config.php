<?php date_default_timezone_set( "Europe/Bratislava" );

$pripojenie = new mysqli( 'localhost:3306', 'root', 'heslo', 'zizi' ); // host:port, user, heslo, databaza
if ( $pripojenie->connect_error ) {
    die( "Nastala chyba pri pripojení k databáze. Chyba: " . $pripojenie->connect_error );
} else {
    $pripojenie->set_charset( "utf8" );
}
