<!DOCTYPE html>
<html>

	<head>
   <title> Upload Item to iBay </title>
   <link type= "text/css" rel = "stylesheet" href = "stylesheetlogin.css" />
   <script> 
	function clickAlertItem() {
		alert("Your product has succesfully uploaded");
		}
</script>		
  
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
			<p> userId
				<input name="userId" id="userId" type="text" />
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
				<input name="price" id="number" type="number" min="0.01" step="0.01" />
			</p>
			<p> Postage
				<input name="postage" id="number" type="number" />
			</p>
			<p> Images
				<input name="imagefile" type="file" />
			</p>
			<p> Additonal Images
				<input name="imagefile2" type="file" />
			</p>
			<p>
				<input class="button" type="submit" value="submit" onclick="clickAlertItem()" />
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

<!-- <!DOCTYPE html>
<html>
<head>
	<title> iBay </title>
	<style>
	body {
		background-color: linen;
		}

    .small-btn {
        width: 50px;
        height: 25px;
    }

    .medium-btn {
        width: 70px;
        height: 30px;
    }

    .big-btn {
        width: 120px;
        height: 40px;
    }

	</style>
</head>

<body>
	<h1 style="font-size:45px;text-align:center;"> iBay </h1>
	<p>Insert the following information about your item:</p>
	<form>
		Item Title:<input type="text" name="title"><br>

		Category:<select><option value="antiques">Antiques</option>
		</select><br>
		Description:<textarea id="subject" name="subject" placeholder="Describe your item..." style="height:170px"></textarea><br>
		Price:<input id="number" type="number" min="0.01" step="0.01"><br>
		Postage:<input id="number" type="number"><br>
		Select a file: <input type="file" name="img"> <br>
		Select images: <input type="file" name="img" multiple>
		<input type="submit"> <br>
		Finish time:<input type="date" name="enddate"> <br>
		Confirmation of correct item details:<input type="checkbox" name="confirm" value="confirm">
		<br>
		<input style="background-color: #00FF00;color: #FF0000;padding: 20px;border-radius: 20px;-moz-border-radius: 20px;-webkit-border-radius: 20px;margin:10px"
		type="button" value="Start Selling Your Item!">


	</form>




</body>
</html>  -->
