<?php
session_start();
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=postgres") or die("Unable to connect to database");
?>
<html lang="en" dir="ltr">

<head>
	<title>Reply</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
	<div class="panel panel-default" style="margin-top:50px">
		<div class="panel-body">
			<form name="frm" method="post" action="/Project/QA/rep1.php">
				<input type="hidden" id="commentid" name="Pcommentid" value="0">
				<div class="form-group">
					<h2>
						<?php
						echo $_SESSION['temail'];
						?>
					</h2>
				</div>
				<div class="form-group">
					<label for="comment">Write your Reply:</label>
					<textarea class="form-control" rows="5" name="reply" required></textarea>
				</div>
				<input type="submit" id="butsave" name="replybtn" class="btn btn-primary" value="Reply">
		</div>
	</div>
	<h3>Replies Posted Earlier</h3><br>
	<p>
		<?php
		
		$a = "SELECT * FROM reply_q_and_a";
		$e = pg_query($conn, $a);
		if (!$e)
			echo "No replies posted";
		if (pg_num_rows($e) > 0) {
			while ($row = pg_fetch_array($e)) {
				$_SESSION['n'] = $row['replyed_by'];
				$_SESSION['q'] = $row['reply'];
				echo "<h4 style='position:absolute;'>" . $_SESSION['n'] . "&nbsp&nbsp&nbsp::&nbsp&nbsp&nbsp&nbsp&nbsp" . $_SESSION['q'] . "</h4><br><br>";
			}
		}
		?>
	</p>
	</form>
</body>

</html>
