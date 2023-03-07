<?php
$hostnom = 'host=btssio.dedyn.io';
$usernom = 'IBOOWEN';
$password = '23/08/2004';
$bdd = 'IBOOWEN_Biblio';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}
?>