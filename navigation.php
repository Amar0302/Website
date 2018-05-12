<?php 
    session_start();
     

if (isset($_SESSION['userid'])){ 
?>

	<div class="navbar">
		<div class="search-container">
			<form action="/action_page.php">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
			<p> Welcome: $_SESSION['userid']; <p>
		</div>
		<div class="dropdown">
				<button class="dropbtn">My iBay
					<i class="fa fa-caret-down"></i>
				</button>
			<div class="dropdown-content">
				<a href="upload_html.php">Upload Item</a>
				<a href="#">My Items</a>
				<a href="#">Summary</a>
			</div>
		</div> 
		<a href="view.php">Products</a>
		<a href="#about">About</a>
		<a href="contactus_html.php">Contact us</a>
		<a href="login_html.php">Log Out</a>
		<a href="home_page.php">Home</a>
	</div> 
  
<?php } else { ?>
<div class="navbar">
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
	
  </div>
	
   
  <a href="view.php">Products</a>
  <a href="#about">About</a>
  <a href="contactus.php">Contact us</a>
  <a href="register_html.php">Register</a>
  <a href="login_html.php">Log in</a>
  <a href="home_page.php">Home</a>
</div>
  
<?php }
?> 
 

 
  </div> 