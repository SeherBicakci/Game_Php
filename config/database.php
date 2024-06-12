<?php
$host = '213.254.130.27';
$db = 'seheroyun';
$user = 'seheroyun_user';
$pass = '123456';

$dsn = "pgsql:host=$host;port=19199;dbname=$db;user=$user;password=$pass";

try {
    $pdo = new PDO($dsn);
    if ($pdo) {
        //echo "Connected to the $db database successfully!";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
