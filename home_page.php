<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type= "text/css" rel = "stylesheet" href = "stylesheetlogin.css" />
<style>

668 x 502
</style>

  
</head>
<body>
<?php
	include 'navigation.php';
	?>


<center>
  <p><font size='10' color='green'>iBay</font>
  <font  size='5'> - <em>eBay's most recent lawsuit recipient</em></font></p>
  <hr/>
  </center>
  <center>
  <div >
  		
<br>
<br>
<br>	
		
	<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <a href="view.php?search=Fashion">
		<img src="Images/fashion.jpg" alt="Fashion Category!" style="width:100%">
		</a>
  <div class="text">Fashion</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <a href="view.php?search=Sports">
		<img src="Images/sportsbanner.jpg" alt="Sports Category!" style="width:100%">
		</a>
  <div class="text">Sports Equiptment</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <a href="view.php?search=Toys">
		<img src="Images/toysbanner.jpg" alt="Toys and Games Category!" style="width:100%">
  <div class="text">Toys and Games</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <a href="view.php?search=Home">
		<img src="Images/homebanner.jpg" alt="Home and Garden Category!" style="width:100%">
		</a>
  <div class="text">Home and Garden</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <a href="view.php?search=Electronics">
		<img src="Images/electronicsbanner.jpg" alt="Electronics Category!" style="width:100%">
		</a>
  <div class="text">Electronics</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <a href="view.php?search=Other">
		<img src="Images/randombanner.jpg" alt="Miscellaneous Category!" style="width:100%">
		</a>
  <div class="text">Miscellaneous Category</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

 
</body>
</html>