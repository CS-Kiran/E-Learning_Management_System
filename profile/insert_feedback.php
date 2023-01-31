<?php
	$con=pg_connect("host=localhost user=postgres dbname=postgres password=postgres") or
	die("Cloud not connect to database");
	
	$create = "CREATE TABLE IF NOT EXISTS feedform(fid SERIAL PRIMARY KEY, Username VARCHAR(100), Email VARCHAR(100) , 
		Coursename VARCHAR(50),Feedback VARCHAR(150))";
        	
	$usernm=pg_escape_string($con,$_REQUEST['nm']);
	$eml=pg_escape_string($con,$_REQUEST['eml']);
	$cnm=pg_escape_string($con,$_REQUEST['csnm']);
    $fd=pg_escape_string($con,$_REQUEST['feed']);
	
	
	$qry="INSERT INTO feedform(Username,Email,Coursename,Feedback)  
					VALUES ('$usernm','$eml','$cnm','$fd')"; 

	pg_query($qry) or die("Error while Inserting");
	echo "Feedback submitted successfully<br/>";
	pg_close($con);

?>	
<a href="index.php">Go Back</a>
