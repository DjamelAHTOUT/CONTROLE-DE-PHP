<?php
try
{

    $db = new PDO('mysql:host=localhost:3306;dbname=bibliothèques;charset=utf8','djamel','djamel');
}

catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}
