
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style5.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.69142.js"></script> 
		<style>
		import url(https://fonts.googleapis.com/css?family=Open+Sans);

html {
  height:100%;
  background-image: linear-gradient(to right top, #8e44ad 0%, #3498db 100%);
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}

.container {
  padding: 2px 16px;
}
h3{
	color:#1a468c;
}
h6{
	color: #8c8e5c;
}
hr.style-one {
border: 0;
height: 1px;
background: #333;
background-image: -webkit-linear-gradient(left, #ccc, #333, #ccc);
background-image: -moz-linear-gradient(left, #ccc, #333, #ccc);
background-image: -ms-linear-gradient(left, #ccc, #333, #ccc);
background-image: -o-linear-gradient(left, #ccc, #333, #ccc);
}
</style>
</head>
<body>
<br><br>
 <h1 style="color:#1a468c;"><center>INVENTORY ORDERS</center></h1>
	<?php
$link = mysqli_connect("amz-profit-calculator.cupbdaodf4ns.ap-northeast-1.rds.amazonaws.com", "jwire", "intern_jw!re", "amz_pc_prod","3306");  
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM inventorydata;";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<center><b><table style='margin:20px;text-align:center;border: solid black; border-collapse: collapse;'>";
            echo "<tr style='border: solid black'>";
                echo "<th style='border: solid black'>NAME</th>";
                echo "<th style='border: solid black'>SALES_PRICE</th>";
                echo "<th style='border: solid black'>ORIGINAL_PRICE</th>";
                echo "<th style='border: solid black'>CATEGORY</th>";
				echo "<th style='border: solid black'>AVAILABILITY</th>";
				echo "<th style='border: solid black'>URL</th>";
				echo "<th style='border: solid black'>UPDATE PRICE</th>";
				
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr style='border: solid black'>";
                echo "<td style='border: solid black'>" . $row['NAME'] . "</td>";
                echo "<td style='border: solid black'>" . $row['SALE_PRICE'] . "</td>";
                echo "<td style='border:solid black'>" . $row['ORIGINAL_PRICE'] . "</td>";
                echo "<td style='border: solid black'>" . $row['CATEGORY'] . "</td>";
				echo "<td style='border: solid black'>" . $row['AVAILABILITY'] . "</td>";
				echo "<td style='border: solid black'>" . $row['URL'] . "</td>";
				echo "<td style='border: solid black'><button type=submit style='color:white; background:#1a468c;
  border: none;
  margin:3px;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;'>Update</button></td>";
            echo "</tr>";
        }
        echo "</table></b></center>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


</body>
</html> 
