<?php
session_start();
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=postgres") or die("Unable to connect to database");
if($_SESSION['name']!=NULL && $_POST['reply'] != NULL)
{
	$create = "CREATE TABLE IF NOT EXISTS reply_q_and_a(rid SERIAL PRIMARY KEY, replyed_by VARCHAR(50) NOT NULL, reply VARCHAR(1000), qid INT)";
	$insert ="INSERT INTO reply_q_and_a(replyed_by, reply, qid) VALUES ('".$_SESSION['name']."','".$_POST['reply']."','".$_SESSION['question_id']."')";
	$r1=pg_query($conn,$create);
  $r2=pg_query($conn,$insert);
  if(!$r1 || !$r2)
  {
      echo "<script type=\"text/javascript\">
            alert(\"Error Encountered !!\");
            window.location='/Project/Student/dashbrd.php';
            </script>";
  }
    else
    {
        echo "<script type=\"text/javascript\">
            alert(\"Reply Posted Sucessfully!!\");
            window.location='/Project/QA/index.php';
            </script>";
    }
}
