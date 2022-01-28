<?php

class Dbh {

    protected function connect() {
        try {
            $username = "root";
            $password = "";
            return $dbh = new PDO('mysql:dbname=accounts;host=localhost;charset=utf8', $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}