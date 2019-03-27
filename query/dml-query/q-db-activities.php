<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/TA2/DBAudit';
include $path . "/connection/connection.php";

// DML Activity List Query
$ActivityListQuery = '
SELECT
	[Transaction ID] as [ID],
	[Transaction Name] as [Name],
	[Begin Time] as [Date]
FROM
	dml_activity
ORDER BY [Date] DESC
';
$ActivityList = $conn->query($ActivityListQuery);

?>