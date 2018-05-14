<?php
  require_once('globals.php');
?>
     <html>
     <head>
     </head>
     <body>
      <div class="search-container">
      <form action="view.php">
        <p>Categories</p>
        <input type="text" placeholder="Search Category" name="category">
        <input type="submit" value=">>" />
       </form>
        
        <form action="view.php">
        <p>Price is less than </p>
        <input type="number" placeholder="less than.." name="pricelessthan">
        <input type="submit" value=">>" />
       </form>

        <form action="view.php">
        <p>Price is more than </p>
        <input type="number" placeholder="more than.." name="pricemorethan">
        <input type="submit" value=">>" />
       </form>

        <form action="view.php">
        <p>Postage is free? </p>
        <input type="radio"  name="freepostage" value="yes"> yes
        <input type="radio"  name="freepostage" value="no"> no
        <input type="submit" value=">>" />
       </form>

         <form action="view.php">
        <p>Regex Search </p>
        <input type="text"  placeholder="RegEx Expression" name="regex"> 
        <input type="submit" value=">>" />
       </form>




    </div>

</body>
