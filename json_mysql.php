<?php
 $connect = mysqli_connect("localhost", "root", "Mahima_1508", "details"); 
 $filename='inventorydata.json';
 $data= file_get_contents($filename);
 $array=json_decode($data,true);
 
 foreach($array as $row)
 {
	 $sql="insert into inventorydata(NAME, SALE_PRICE, CATEGORY,ORIGINAL_PRICE, AVAILABILITY, URL) values('".$row["NAME"]."', '".$row["SALE_PRICE"]."', '".$row["CATEGORY"]."', '".$row["ORIGINAL_PRICE"]."',, '".$row["AVAILABILITY"]."', '".$row["URL"]."');";
	 
	 mysqli_query($connect, $sql);
 }
 
 echo 'Data inserted successfully';
?>
