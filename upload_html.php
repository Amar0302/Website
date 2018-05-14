<!DOCTYPE html>
<html>

	<head>
   <title> Upload Item to iBay </title>
   <link type= "text/css" rel = "stylesheet" href = "stylesheetlogin.css" />
  </head>

	<body>
	
	<?php
	include 'navigation.php';
	?>
	
	

  <center>
  <p><font size='10' color='green'>iBay</font>
  <font size='5'> - <em>eBay's most recent lawsuit recipient</em></font></p>
 <hr/>

  </center>



		<div class="container">
		<form class="form_box" action="upload.php" enctype="multipart/form-data" method="post">
			<input name="MAX_FILE_SIZE" type="hidden" value="1000000" />
			<p>
			<input name="dbname" type="hidden" value="group03"/>
			</p>
			<p> Title
				<input name="title" id="title" type="text" />
			</p>
			<p> Category
				<select name="category" id="title">
					<option value="Antiques">Antiques</option>
					<option value="Electronics">Electronics</option>
					<option value="Fashion">Fashion</option>
					<option value="Home & Garden">Home & Garden</option>
					<option value="Sports">Sports</option>
					<option value="Toys & Games">Toys & Games</option>
					<option value="Other">Other</option>
				</select>
			</p>
			<p> Description
				<textarea name="description" id="description" rows="5" cols="45"></textarea>
			</p>
			<p> Price
				<input name="price" id="number" type="number" min="0.01" step="0.01"  placeholder="0.00" />
			</p>
			<p> Postage
				<input name="postage" id="number" type="number" min="0.00" step="0.01" placeholder="0.00" />
			<p> Images
				<input name="imagefile" type="file" />
			</p>
			<p>
				<input class="button" type="submit" value="submit" />
			</p>

		</form>
	</div>
		<hr />
		[
		<a href="view.php?dbname=group03">View Items</a>
		]
		</center>
	</body>
</html>

