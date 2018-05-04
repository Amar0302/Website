<!DOCTYPE html>
<html>
<head>
   <link type= "text/css" rel = "stylesheet" href = "stylesheetlogin.css" />

<script> 
	function clickAlert() {
		alert("You will be contacted to discuss your query in the next 24 hours");
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
<h3>Contact Form</h3>

<div class="container">
  <form class="form_box" action="/action_page.php">
    <p><label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."/>
</p>
<p>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."/>
	</p>
  <p>
	<label for="email">Email</label>
	<input type="text" id="email" name="emailaddress" placeholder="Your email address.."/>
</p>
<p>
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
</p>
<p>
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
</p>
<p>
    <input class="button" type="button" onclick="clickAlert()" value="Submit">
  </p>
  </form>
</div>

</body>
</html>


