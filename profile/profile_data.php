<?php
$con=pg_connect("host=localhost user=postgres dbname=postgres  password=postgres") 
	or die("couldn't connect  to database");

$create="CREATE TABLE IF NOT EXISTS profiledata(pid serial primary key,username varchar(30),email varchar(30),
	education varchar(50),profession varchar(30))"; 

$usrnm=pg_escape_string($con,$_REQUEST['nm']);
$eml=pg_escape_string($con,$_REQUEST['eml']);
$edu=pg_escape_string($con,$_REQUEST['edu']);
$prf=pg_escape_string($con,$_REQUEST['prf']);

$qry="insert into profiledata(username,email,education,profession)
	values('$usrnm','$eml','$edu','$prf')";

pg_query($qry) or die("Error while Inserting");
echo"Profile Information saved successfully</br>";


pg_close($con);

?>
<a href="index.php">Go back to insert new_record</a>
