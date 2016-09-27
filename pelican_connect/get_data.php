<?php
// Get data
include("../mysqli_p.php");

$school = $_GET["school"];

$sql = "select * from members where school = '$school'";
$result = $conn->query($sql);
$row_array = array();
$i;

while($row = $result->fetch_assoc()) {
	$row_array[] = $row;
} 

echo "<table class=\"result_table\">
			<tbody>
				<tr>
					<th>Name</td>
					<th>Email</td>
					<th>Address</td>
					<th>School</td>
				</tr>";

for($i = 0; $i < count($row_array); $i++) {
	echo "<tr>
	<td>" . $row_array[$i]["name"] . "</td>
	<td>" . $row_array[$i]["email"] . "</td>
	<td>" . $row_array[$i]["address"] . "</td>
	<td>" . $row_array[$i]["school"] . "</td>
		</tr>";
}

	echo "</tbody>
		</table>";

$conn->close();

?>