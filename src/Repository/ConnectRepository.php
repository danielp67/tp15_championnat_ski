<?php

namespace App\Repository;

use PDO;
use PDOException;

final class ConnectRepository
{
    public function dbConnect()
    {
        try {
            // On se connecte à MySQL
            return new PDO('mysql:host=localhost;dbname=championnat_ski; charset=utf8', 'root', '');
        } catch (PDOException $error) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : ' . $error->getMessage());
        }
    }
}
