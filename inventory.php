<?php
$link = mysqli_connect("localhost", "root", "Mahima_1508", "details"); 
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM inventorydata;";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<center><table style='align:center;border: solid black; border-collapse: collapse;'>";
            echo "<tr style='border: solid black'>";
                echo "<th style='border: solid black'>NAME</th>";
                echo "<th style='border: solid black'>SALES_PRICE</th>";
                echo "<th style='border: solid black'>ORIGINAL_PRICE</th>";
                echo "<th style='border: solid black'>CATEGORY</th>";
				echo "<th style='border: solid black'>AVAILABILITY</th>";
				echo "<th style='border: solid black'>URL</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr style='border: solid black'>";
                echo "<td style='border: solid black'>" . $row['NAME'] . "</td>";
                echo "<td style='border: solid black'>" . $row['SALE_PRICE'] . "</td>";
                echo "<td style='border:solid black'>" . $row['ORIGINAL_PRICE'] . "</td>";
                echo "<td style='border: solid black'>" . $row['CATEGORY'] . "</td>";
				echo "<td style='border: solid black'>" . $row['AVAILABILITY'] . "</td>";
				echo "<td style='border: solid black'>" . $row['URL'] . "</td>";
            echo "</tr>";
        }
        echo "</table></center>";
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