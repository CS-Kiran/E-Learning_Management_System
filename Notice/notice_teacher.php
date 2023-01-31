<html>
<head>
    <title>Notice Dashboard</title>
    <link rel="stylesheet" href="button.css">
</head>

<body>
    <?php
    $conn = pg_connect("host=localhost dbname=postgres user=postgres password=postgres") or die("Unable to connect to database");
    session_start();
    $a = "SELECT * FROM gen_notice";
    $e = pg_query($conn, $a);
    if (pg_num_rows($e) > 0) {
        while ($row = pg_fetch_array($e)) {
            $_SESSION['n_name'] = $row['name'];
            $_SESSION['n_title'] = $row['title'];
            $_SESSION['n_id'] = $row['id'];
        }
    }
    ?>
    <form method="post">
        <input class="btn" type='submit' id='butsave' name='post' value='POST' style='display:inline-block; position:relative; margin-left:93%;'>
        <?php
        if (isset($_POST['post'])) {
            header("Location: /Project/Notice/notice.html");
        }
        ?>
        <h2 style='display:inline-block; position:relativeab;'>NOTICE HISTORY</h2>
        <?php
        echo "<h4 style='position:absolute;'>" . $_SESSION['n_name'] . "&nbsp&nbsp&nbsp::&nbsp&nbsp&nbsp&nbsp&nbsp" . $_SESSION['n_title'] . "</h4>";
        ?>
        <div class="rp">
            <button class="btn" type="submit" name="delete" style='display:inline-block; position:relative; margin-left:93%;'>DELETE</button><br><br>
            <?php
            if (isset($_POST['delete'])) {
                $nid = $_SESSION['n_id'];
                $d = "DELETE FROM gen_notice WHERE id=$nid";
                $e = pg_query($conn, $d);
                echo "<script type=\"text/javascript\">
      alert(\"Deleted Successfully\");
      window.location='/Project/Notice/notice_teacher.php';
      </>";
            }
            ?>
        </div>
    </form>
</body>

</html>
