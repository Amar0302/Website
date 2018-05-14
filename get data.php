<?php 
$db_host = 'localhost'; // Server Name
$db_user = 'group03'; // Username
$db_pass = 'CtIEfrSX34'; // Password
$db_name = 'group03'; // Database Name


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); 
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
} 
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

//if(isset($_GET["orderBy"]))  {
//	header("Location: view.php?orderBy='orderBy'");
//}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<link type= "text/css" rel = "stylesheet" href = "stylesheetlogin.css" />

	<style type="text/css">

table {
	margin: auto;
	font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
	font-size: 12px;
}
table td {
	transition: all .5s;
}

/* Table */
.data-table {
	border-collapse: collapse;
	font-size: 14px;
	min-width: 537px;
}

.data-table th, 
.data-table td {
	border: 1px solid #e1edff;
	padding: 7px 17px;
}
.data-table caption {
	margin: 7px;
}

/* Table Header */
.data-table thead th {
	background-color: green;
	color: #FFFFFF;
	border-color: #6ea1cc !important;
	text-transform: uppercase;
}

/* Table Body */
.data-table tbody td {
	color: #353535;
}
.data-table tbody td:first-child,
.data-table tbody td:nth-child(4),
.data-table tbody td:last-child {
	text-align: right;
}

.data-table tbody tr:nth-child(odd) td {
	background-color: #fffff0;
}
.data-table tbody tr:hover td {
	background-color: #ffffa2;
	border-color: #ffff0f;
}

/* Table Footer */
.data-table tfoot th {
	background-color: #e5f5ff;
	text-align: right;
}
.data-table tfoot th:first-child {
	text-align: left;
}
.data-table tbody td:empty
{
	background-color: #ffcccc;
}
.get-data-body {
	font-size: 15px;
	color: #343d44;
	font-family: "segoe-ui", "open-sans", tahoma, arial;
	padding: 0;
	margin: 0;
}



	</style> 
</head>
<body class = "get-data-body">
				<?php
						$regexqueryparam = '';
						$searchqueryparam='';
						$categoryqueryparam='';
						$pricelessthanqueryparam='';
						$pricemorethanqueryparam='';
						$freepostagequeryparam='';

						if(isset($_GET["regex"])) {
							$getregex = $_GET["regex"];
							$regexqueryparam="&regex={$getregex}";
						}
						if(!isset($orderBy)) {
							$orderBy = 'itemId';
						}
						if(isset($_GET["search"])) {
							$getsearch = $_GET["search"];
							$searchqueryparam="&search={$getsearch}";
						}
						if(isset($_GET["category"])) {
							$getcategory = $_GET["category"];
							$categoryqueryparam="&category={$getcategory}";
						}
						if(isset($_GET["pricelessthan"])) {
							$getpricelessthan = $_GET["pricelessthan"];
							$pricelessthanqueryparam="&pricelessthan={$getpricelessthan}";
						}
						if(isset($_GET["pricemorethan"])) {
							$getpricemorethan = $_GET["pricemorethan"];
							$pricemorethanqueryparam="&pricemorethan={$getpricemorethan}";
						}
						if(isset($_GET["freepostage"])) {
							$getfreepostage = $_GET["freepostage"];
							$freepostagequeryparam="&freepostage={$getfreepostage}";
						}
					echo "Currently ordered by: {$orderBy}";
					echo " <p> Order by: ";
					echo "<select name=\"orderBy_dropdown\" id=\"orderBy_dropdown\" onchange=\"location = this.value;\" >";	
					echo "<option value=\"\" selected disabled hidden>Choose here</option>";
					echo "<option value=\"view.php?orderBy=itemId{$searchqueryparam}{$categoryqueryparam}{$pricelessthanqueryparam}{$pricemorethanqueryparam}{$freepostagequeryparam}{$regexqueryparam} \" name=\"orderBy_dropdown\">Item ID</option>";
					echo "<option value=\"view.php?orderBy=userId{$searchqueryparam}{$categoryqueryparam}{$pricelessthanqueryparam}{$pricemorethanqueryparam}{$freepostagequeryparam}{$regexqueryparam}\" name=\"orderBy_dropdown\"> User ID</option>"; 
					echo "<option value=\"view.php?orderBy=title{$searchqueryparam}{$categoryqueryparam}{$pricelessthanqueryparam}{$pricemorethanqueryparam}{$freepostagequeryparam}{$regexqueryparam}\" name=\"orderBy_dropdown\"> Title</option>";
					echo "<option value=\"view.php?orderBy=category{$searchqueryparam}{$categoryqueryparam}{$pricelessthanqueryparam}{$pricemorethanqueryparam}{$freepostagequeryparam}{$regexqueryparam}\" name=\"orderBy_dropdown\"> Category</option>";
					echo "<option value=\"view.php?orderBy=description{$searchqueryparam}{$categoryqueryparam}{$pricelessthanqueryparam}{$pricemorethanqueryparam}{$freepostagequeryparam}{$regexqueryparam}\" name=\"orderBy_dropdown\"> Description</option>"; 
					echo "<option value=\"view.php?orderBy=price{$searchqueryparam}{$categoryqueryparam}{$pricelessthanqueryparam}{$pricemorethanqueryparam}{$freepostagequeryparam}{$regexqueryparam}\" name=\"orderBy_dropdown\"> Price</option>";
					echo "<option value=\"view.php?orderBy=postage{$searchqueryparam}{$categoryqueryparam}{$pricelessthanqueryparam}{$pricemorethanqueryparam}{$freepostagequeryparam}{$regexqueryparam}\" name=\"orderBy_dropdown\"> Postage</option>"; 
					echo "<option value=\"view.php?orderBy=start{$searchqueryparam}{$categoryqueryparam}{$pricelessthanqueryparam}{$pricemorethanqueryparam}{$freepostagequeryparam}{$regexqueryparam}\" name=\"orderBy_dropdown\"> Start Time</option>";
					echo "<option value=\"view.php?orderBy=finish{$searchqueryparam}{$categoryqueryparam}{$pricelessthanqueryparam}{$pricemorethanqueryparam}{$freepostagequeryparam}{$regexqueryparam}\" name=\"orderBy_dropdown\"> Finish Time</option>";
				?>
				</select>
			</p>
	<table class="data-table">
		<caption class="title">Products</caption>
		<thead>
			<tr>
				<th>itemId</th>
				<th>UserId</th>
				<th>Title</th>
				<th>Category</th>
				<th>Description</th>
				<th>Price</th>
				<th>Postage</th>
				<th>Start</th>
				<th>Finish</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$no 	= 1;
			$total 	= 0;
			
        		 
			while ($row = mysqli_fetch_array($query)) {
				$itemId = $row['itemId'];
				$sql = mysql_query("SELECT *  FROM iBayImages where itemId =  {$itemId}");
				$imageRow = mysql_fetch_array($sql);
				$viewpicture = '';

				if(!empty($imageRow['imageId'])) 
					$viewpicture = $imageRow['imageId'];

				echo "<tr>
						<td>{$row['itemId']}</td>
						<td>{$row['userId']}</td>
						<td><a href=\"file.php?imageId={$viewpicture}\">{$row['title']}</a></td>
						<td>{$row['category']}</td>
						<td>{$row['description']}</td>
						<td>£{$row['price']}</td>
						<td>£{$row['postage']}</td>
						<td>{$row['start']}</td>
						<td>{$row['finish']}</td>
					</tr>";
				$no++;
			} 
			$count = mysqli_num_rows($query);
			if ($count == 0 ) {
				echo '<p style=color:red ;> <i>No results, please try again </i></p>';
			}	
		?>
		</tbody>
		<tfoot>
			</tfoot>
	</table>

</body>
</html>