<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title> Insert</title>

		<?php include "header.php";?>
		<br/>
		<div class="container">
  <!-- Content here -->
		<div class="row">
		
		<div class="col-lg-8">
		
		<form name="frmImage" enctype="multipart/form-data" action="" method="post" >
		  <div class="form-group">
			<label for="exampleInputEmail1">Image</label>
			<input name="file" type="file" class="form-control" required>
			
		  </div>
		 
		 
		  <button type="submit" name="insertimage" class="btn btn-primary">Submit</button>
		</form>
		
		
		
		<?php
		
		if(isset($_POST['insertimage']))
		{
			
			if(count($_FILES) > 0) 
			{
				if(is_uploaded_file($_FILES['file']['tmp_name'])) 
				{
					mysql_connect("localhost", "root", "");
					mysql_select_db ("blobimage");
					$imgData =addslashes(file_get_contents($_FILES['file']['tmp_name']));
					$imageProperties = getimageSize($_FILES['file']['tmp_name']);
					$sql = "INSERT INTO image(id,imagetype , image)
					VALUES('','{$imageProperties['mime']}', '{$imgData}')";
					$current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
					//$run = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
					echo "<br/>";
					if(isset($current_id))
					{
						//header("Location: listImages.php");
						//echo "Image added";
						echo '<div class="alert alert-primary" role="alert">
							 Image added!
							</div>';
					}
					
				}
			}
		}
		?>
		
		</div>
		<div class="col-lg-4"></div>
		</div>
		</div>
  
		<?php include "footer.php";?>
		
		
		