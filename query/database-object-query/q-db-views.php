<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/TA2/DBAudit';
include $path . "/connection/connection.php";

// Database Access Query
$ViewListQuery = '
SELECT
	ObjectID as [ObjID],
	ObjectName as [ObjName],
	CreateDate as [CrDate]
FROM 
    NorthwindViews
';
$ViewList = $conn->query($ViewListQuery);

?>