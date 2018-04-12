<?php
    $conn = mysql_connect("localhost", "root", "");
    mysql_select_db("blobimage");
    //$sql = "SELECT id FROM image ORDER BY id DESC"; 
	$sql = "SELECT * FROM image ORDER BY id DESC"; 
    $result = mysql_query($sql);
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title> View</title>

		<?php include "header.php";?>
		<br/>
		<div class="container">
		<!-- Content here -->
		<div class="row">
		
		
		<?php
			while($row = mysql_fetch_array($result)) {
		?>
		<div class="col-md-4" style="padding:30px;">
    <div class="thumbnail">
			 
				
			
		
			<img class="img-responsive" style="width:100%" src="callimage.php?image_id=<?php echo $row["id"]; ?>" /><br/>
			<!--<img src="<?php echo $row["image"]; ?>" /><br/>-->
		</div>
  </div>
		<?php		
		}
			mysql_close($conn);
		?>
		
		
		</div>
		</div>
  
		<?php include "footer.php";?>
		
		
		
		