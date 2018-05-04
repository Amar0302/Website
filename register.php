<!DOCTYPE HTML>
<html>
	<head>
		<title>Register</title>
    <link type= "text/css" rel = "stylesheet" href = "stylesheetlogin.css" />

	 </head>
	 <body>
	<div class="navbar">
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
<div class="dropdown">
    <button class="dropbtn">My iBay
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="upload.html">Upload Item</a>
      <a href="#">My Items</a>
      <a href="#">Summary</a>
    </div>
	

  </div> 
  <a href="#products">Products</a>
  <a href="#about">About</a>
  <a href="contactus.html">Contact us</a>
  <a href="register.html">Register</a>
  <a href="login.html">Log in</a>
  <a href="home_page.html">Home</a>


  </div> 
  
</div>
      <center>
        <p><font size='10' color='green'>iBay</font>
        <font size='5'> - <em>eBay's most recent lawsuit recipient</em></font></p>
        <hr/>
      </center>
		<div>
			<h1> Registration:</h1>
		</div>
		<center>
	
	</head>
	<body > 
		<h3> IBAY </h3>
		<form class="form_box" action="upload_member.php" enctype="multipart/form-data" method="post">
			<input name="MAX_FILE_SIZE" type="hidden" value="1000000" />
			<!--<p> db name 
			<input name="dbname" type="text" value="group03"/>
			</p>-->
			<p> Name:
				<input name="name" id="name" type="text" />
			</p>
			<p> Password:
				<input name="password" id="password" type="password" />
			</p>
			<p> Email:
				<input name="email" id="email" type="text" />
			</p>
			
			<p> Address:
				<input name="address" id="address" rows="5" cols="45"></textarea>
			</p>
			
			<p> Postcode:
				<input name="postcode" id="postcode" type="text" />
			</p>
        <p>
        <input class="button" type="submit" value="submit" />
      </p>
    

		</form>

		</center>


</html>