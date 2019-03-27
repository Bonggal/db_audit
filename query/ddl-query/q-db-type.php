<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/TA2/DBAudit';
include $path . "/connection/connection.php";

// DDL Type List Query
$TypeListQuery = '
SELECT 
	EventDate as [Date],
	EventType as [Type],
	ObjectName as [Object],
	LoginName as [Name]
FROM 
	NorthwindDDLActivity
ORDER BY [Date] ASC
';
$TypeList = $conn->query($TypeListQuery);


// DDL Type Chart Query
$TypeChartQuery = '
SELECT 
	EventType as [Type],
	COUNT(EventType) as [Total]
FROM 
	NorthwindDDLActivity
GROUP BY
	EventType
';
$TypeChart = $conn->query($TypeChartQuery);

$total = array();
$type = array();

while ($row = $TypeChart->fetch(PDO::FETCH_ASSOC)) {
	array_push($total, $row['Total']);
	array_push($type, $row['Type']);
}

?>