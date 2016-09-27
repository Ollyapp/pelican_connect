<?php
// mysqli connect and create database 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
$create_database = "create database if not exists pelican_connect;";
$use_database = "use database pelican_connect;";
$create_table = "create table members (name varchar(30), email varchar(30), address varchar(50), school varchar(20));";

if($conn->connect_error) {
	die("Connection failed: " . $conn->connection_error);
}


if (!$conn->query($create_database) === TRUE) 
    echo "Error creating database: " . $conn->error;

if (!$conn->select_db('pelican_connect') === TRUE) 
    echo "Error using use database" . $conn->error;

if (!$conn->query($create_table) === TRUE) 

?>