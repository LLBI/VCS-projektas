<?php    
    //DB prijungimas
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "contacts");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli -> connect_error) { //Tikrinam ar prisijungė
        echo "Įvyko klaida!\n";
        echo 'Klaida: '. $mysqli -> connect_error. '\n';
        exit();
    }
    mysqli_query($mysqli, "INSERT INTO contacts (name, email, message) VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')");