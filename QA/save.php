<?php
session_start();
$conn = pg_connect("host=localhost dbname=project user=postgres password=postgres") or die("Unable to connect to database");
if ($_SESSION['name'] != NULL && $_POST['msg'] != NULL) {
    $create = "CREATE TABLE IF NOT EXISTS q_and_a(qid SERIAL PRIMARY KEY, name VARCHAR(50) NOT NULL, post VARCHAR(1000))";
    $insert = "INSERT INTO q_and_a(name, post) VALUES ('" . $_SESSION['name'] . "','" . $_POST['msg'] . "')";
    $sel="SELECT * FROM q_and_a";
    $r1 = pg_query($conn, $create);
    $r2 = pg_query($conn, $insert);
    $r3 = pg_query($conn, $sel);
    if (!$r1 || !$r2) {
        echo "<script type=\"text/javascript\">
            alert(\"Error Encountered !!\");
            window.location='/Project/QA/index.php';
            </script>";
    }
    else {
        if (pg_num_rows($r3) > 0) {
            while ($row = pg_fetch_array($r3)) {
                $_SESSION['question_id'] = $row['qid'];
            }
        }
        echo "<script type=\"text/javascript\">
            alert(\"Question Posted Sucessfully!!\");
            window.location='/Project/QA/index.php';
            </script>";
    }
}
