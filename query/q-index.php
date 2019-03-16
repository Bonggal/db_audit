<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/TA2/DBAudit';
include $path . "/connection/connection.php";

// Database Access Query
$query1 = '
select top 365
	day(AccessTime) as [Day],
    month(AccessTime) as [Month],
    year(AccessTime) as [Year],
    count(AccessTime) as [Total]
from
    DatabaseAccessLog
group by
	year(AccessTime),
    month(AccessTime),
    day(AccessTime)
Order by Year asc, Month asc, day asc
';
$stmt1 = $conn->query($query1);

$total = array();
$month = array();

while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
    array_push($total, $row['Total']);
    array_push($month,$row['Day'] . " " . date('F', mktime(0, 0, 0, $row['Month'], 10)) . " " . $row['Year']);
}

// Database DDL Activity Query
$query2 = '
select top 5
	EventType as [Type],
	[ObjectName] as [Object],
	EventDate as [Date]
from NorthwindDDLActivity
order by Date desc
';
$stmt2 = $conn->query($query2);

// Database DDL Type Count Query
$query3 = '
select
    EventType as [Type],
	count(*) as [Total]
from NorthwindDDLActivity
group by EventType
order by [Type] asc
';
$stmt3 = $conn->query($query3);

$ddl_type = array();
$ddl_total = array();

while ($row = $stmt3->fetch(PDO::FETCH_ASSOC)) {
    array_push($ddl_type, $row['Type']);
    array_push($ddl_total, $row['Total']);
}
?>