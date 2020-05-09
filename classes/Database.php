<?php

class con
{

    public function connect()
    {
        try {
            $connect = new PDO('mysql:host=localhost;dbname=laravelproject2', 'root', '');
            if ($connect) {
                //echo "connected to successfully";
                return $connect;
            }
        } catch (PDOException $e) {
            echo $e->getMessage() . "bad";
        }
    }
}
// $d = new con();
// echo $d->connect();
