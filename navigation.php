<?php 
    session_start();
     


if (isset($_SESSION['name'])){ 

?>

	<div class="navbar">
		<div class="search-container">

			<form action="/action_page.php">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
			<p> Welcome: $_SESSION['userid']; <p>

    
		<button type="button" onclick="window.location.href='search.php'">Search!</button>
		<p> Welcome: <?php echo "{$_SESSION['name']}" ?> <p>

    
		</div>
		<div class="dropdown">
				<button class="dropbtn">My iBay
					<i class="fa fa-caret-down"></i>
				</button>
			<div class="dropdown-content">
				<a href="upload_html.php">Upload Item</a>
				<a href="myitems.php">My Items</a>
				<a href="summary.php">Summary</a>
			</div>
		</div> 
		<a href="view.php">Products</a>

		<a href="about.php">About</a>
		<a href="contactus.php">Contact us</a>

		<a href="logout.php">Log Out</a>
		<a href="home_page.php">Home</a>
	</div> 
  
<?php } else { ?>
<div class="navbar">
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  <button type="button" onclick="window.location.href='search.php'">Search!</button>

  </div>
	
   
  <a href="view.php">Products</a>
  <a href="about.php">About</a>
  <a href="contactus.php">Contact us</a>
  <a href="register_html.php">Register</a>
  <a href="login_html.php">Log in</a>
  <a href="home_page.php">Home</a>
</div>
  
<?php }
?> 
 

 
  </div> 