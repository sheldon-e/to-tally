<?php
try
{
$pdo = new PDO('mysql:host=localhost;dbname=db_a29767_totally', 'a29767_totally', 'Eurek@08');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
echo 'Unable to connect to the database server: ' . $e->getMessage();
exit();
}
?>