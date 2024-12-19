<?php
$host = 'localhost';
$db = 'capasbd';
$user = 'root';
$pw = '';

try {
$this->link = new PDO("mysql:host=$host; dbname=$db", $user, $pw);
$this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
die("Error de conexión: ". $e->getMessage());
}