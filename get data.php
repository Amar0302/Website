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

	<<style type="text/css">

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
	background-color: #508abb;
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
	background-color: #f4fbff;
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
			<p> Order By:
				<?php
						
						$searchqueryparam='';
						if(isset($_GET["search"])) {
							$getsearch = $_GET["search"];
							$searchqueryparam='&search={$getsearch}';
						}
					echo '<select name="orderBy_dropdown" id="orderBy_dropdown" onchange="location = this.value;" >';	
					echo '<option value="view.php?orderBy=itemId{$searchqueryparam}" name="orderBy_dropdown">';
					echo '<option value="view.php?orderBy=userId{$searchqueryparam}" name="orderBy_dropdown"> User ID</option>'; 
					echo '<option value="view.php?orderBy=title{$searchqueryparam}" name="orderBy_dropdown"> Title</option>';
					/*echo '<option value="" name="orderBy_dropdown"> <a href="view.php?orderBy=category{$searchqueryparam}">Category</option>';
					echo '<option value="" name="orderBy_dropdown"> <a href="view.php?orderBy=description{$searchqueryparam}">Description</option>';
					echo '<option value="" name="orderBy_dropdown"> <a href="view.php?orderBy=price{$searchqueryparam}">Price</option>';
					echo '<option value="" name="orderBy_dropdown"> <a href="view.php?orderBy=postage{$searchqueryparam}"> Postage</option>';
					echo '<option value="" name="orderBy_dropdown"> <a href="view.php?orderBy=start{$searchqueryparam}"> Start Time</option>';
					echo '<option value="" name="orderBy_dropdown"> <a href="view.php?orderBy=finish{$searchqueryparam}"> Finish Time</option>';
					?>*/?>
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
			while ($row = mysqli_fetch_array($query))
			{
				echo '<tr>
						<td>'.$row['itemId'].'</td>
						<td>'.$row['userId'].'</td>
						<td>'.$row['title'].'</td>
						<td>'.$row['category'].'</td>
						<td>'.$row['description'].'</td>
						<td>'.$row['price'].'</td>
						<td>'.$row['postage'].'</td>
						<td>'.$row['start'].'</td>
						<td>'.$row['finish'].'</td>
					</tr>';
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