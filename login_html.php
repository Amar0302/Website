<!DOCTYPE HTML>
<html>
  <head>
   <title>Login</title>
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
		<div>
			<h1> Log in: <h1>
		</div>

		<div class="form_box">
				<?php 
        $urlParameters = array();
        parse_str($_SERVER['QUERY_STRING'], $urlParameters);
        
        if (!empty($urlParameters) && $urlParameters['incorrectLogin'] == true){
         /* echo "<p class = "error_message;" > Incorrect details</p>" ;*/
          /*echo "<p class=\\"error_message\\">" . $error_message . "</p>";
          /*echo '<p class = "'. $error_message .'" */
          echo '<p style=color:red ;> <i>Incorrect details, please try again </i></p>' ;
        }
    ?>
		<form method="GET" action="login.php">

	  		<input type="text" placeholder="Email" name="email" value="">
	  		<input type= "password" placeholder="Password" name= "password">
	  		<br><br>
	  		<div class="buttons_container">
		  		<input id="button" class="button" type="submit" name="login" value="Login"> 
				
				<a class="button" href = "register_html.php" > Or Register</a>
			</div>
		</form>
		</div>



		<!--<picture>
  			<source srcset="https://en.wikipedia.org/wiki/EBay" media="(max-width: 600px)">
  			<source srcset="https://gadgets.ndtv.com/internet/news/ebay-india-to-expand-refurbished-products-portfolio-748361" media="(max-width: 1500px)">
  			<source srcset="https://www.express.co.uk/life-style/life/944289/ebay-rare-coins-coin-two-pound-abolition-slave-trade-value-worth">
 			<img src="https://gadgets.ndtv.com/internet/news/ebay-india-to-expand-refurbished-products-portfolio-748361" alt="Flowers" style="width:auto;">
		</picture> -->
	</body>
</html>
