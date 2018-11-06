<?php

class DBConnection
{

    public static function getConnection(){
        return new PDO('mysql:host=localhost;dbname=1084750','1084750','master1983',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
}
?>
