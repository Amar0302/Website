<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
        <link type= "text/css" rel = "stylesheet" href = "stylesheetlogin.css" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript">
	</script>
	<script type="text/javascript">
	<!-- own JS scripts go here -->
	
	</script> 
	
	
	</style>
</head>
<body>
<?php
	include 'navigation.php';
	?>
<center>


  </div>
  <center>
  <p><font size='10' color='green'>iBay</font>
  <font size='5'> - <em>eBay's most recent lawsuit recipient</em></font></p>
  <hr/>
  </center>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<center>
<div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
		    <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">All</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">category1</a></li>
                      <li><a href="#its_equal">category2</a></li>
                      <li><a href="#greather_than">category3</a></li>
                      <li><a href="#less_than">category4</a></li>
                      <li class="divider"></li>
                      <li><a href="#all">category5</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
	</div>
</div>
</center>

<!-- Task3: div Section3 Timetable: use <table> tag to generate a 2x3 table with border="10"  -->    
<br>
<br>

<div class="table">
<center>
<p> Our Products </p>
 <table border="10", style="width:75%;background-color: #ffffff" ;>
  <tr>
    <th>Heading1</th>
    <th>Heading2</th>
	<th>Heading3</th>
	<th>Heading4</th>
	<th>Heading5</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	<td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	<td></td>
  </tr>
</table> 
</center>
</div>

<br/>
<br/>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
 
</body>
</html>
