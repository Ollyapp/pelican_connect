<?php
// Post data
include("../mysqli_p.php");

// Dissasemble variables
$name = strip_tags($_POST["name"]);
$email = strip_tags($_POST["email"]);
$address = strip_tags($_POST["address"]);
$school = strip_tags($_POST["school"]);
$school2 = strip_tags($_POST["school2"]);
$school3 = strip_tags($_POST["school3"]);
$school4 = strip_tags($_POST["school4"]);

$i;

// put all schools into one array in preperation for loop
$school_array = array();
array_push($school_array, $school, $school2, $school3, $school4);

for($i = 0; $i < count($school_array); $i++) {
	// check too see if school input is not empty
	if($school_array[$i] == TRUE) {
		$sql = "insert into members(name, email, address, school) values('$name', '$email', '$address', '$school_array[$i]')";

		if($conn->query($sql) === TRUE) {
			echo "Record Updated Successfully ";
		}
		else {
			echo "Error updating record: " . $conn->error;
		}
	}
}

$conn->close();

?>