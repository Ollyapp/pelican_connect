<?php
// Get school selection options from database for the Select tag.
include("../mysqli_p.php");

$sql = "select distinct school from members";
$result = $conn->query($sql);
$array = array();
$i = 0;

while($option = $result->fetch_assoc()) {
	$array[] = $option["school"];
}

print_r($array);

for($i; $i < count($array); $i++)
	echo "<option>" . $array[$i] . "</option>";

if(!$option = $result->fetch_assoc())
	echo "No results Returned";


$conn->close();

?>