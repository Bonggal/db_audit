<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/TA2/DBAudit';
include $path.'/connection/database-config.php';

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database = $database", $uid, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error connecting to SQL Server");
}
