<?php
	$conn = mysql_connect("localhost", "root", "");
    mysql_select_db("blobimage") or die(mysql_error());
    if(isset($_GET['image_id']))
		{
			$imid=$_GET['image_id'];
        //$sql = "SELECT imagetype,image FROM image WHERE id=".$_GET['image_id'];
		$sql = "SELECT * FROM image WHERE id='$imid'";
		$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
		$row = mysql_fetch_array($result);
		//header("Content-type: " . $row["imagetype"]);
        echo $row["image"];
	}
	mysql_close($conn);
?>