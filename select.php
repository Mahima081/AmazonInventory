<?php  
 if(isset($_POST["asin"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("amz-profit-calculator.cupbdaodf4ns.ap-northeast-1.rds.amazonaws.com", "jwire", "intern_jw!re", "amz_pc_prod","3306");  
      $query = "SELECT * FROM datainfo WHERE asin = '".$_POST["asin"]."'";  
      $result = mysqli_query($connect, $query);  
      echo '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           echo ' 
				<tr>  
                     <td width="30%"><label>Amazon-order-id</label></td>  
                     <td width="70%">'.$row["amazon-order-id"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Merchant-order-id</label></td>  
                     <td width="70%">'.$row["merchant-order-id"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Purchase_date</label></td>  
                     <td width="70%">'.$row["purchase_date"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Last-updated-date</label></td>  
                     <td width="70%">'.$row["last-updated-date"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Order-status</label></td>  
                     <td width="70%">'.$row["order-status"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Fulfillment-channel</label></td>  
                     <td width="70%">'.$row["fulfillment-channel"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Sales-channel</label></td>  
                     <td width="70%">'.$row["sales-channel"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Order-channel</label></td>  
                     <td width="70%">'.$row["order-channel"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Url</label></td>  
                     <td width="70%">'.$row["url"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Ship-service-level</label></td>  
                     <td width="70%">'.$row["ship-service-level"].'</td>  
                </tr>  
				<tr>  
                     <td width="30%"><label>Product-name</label></td>  
                     <td width="70%">'.$row["product-name"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Sku</label></td>  
                     <td width="70%">'.$row["sku"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Asin</label></td>  
                     <td width="70%">'.$row["asin"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Item-status</label></td>  
                     <td width="70%">'.$row["item-status"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Quantity</label></td>  
                     <td width="70%">'.$row["quantity"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Currency</label></td>  
                     <td width="70%">'.$row["currency"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Item-price</label></td>  
                     <td width="70%">'.$row["item-price"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Item-tax</label></td>  
                     <td width="70%">'.$row["item-tax"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Shipping-price</label></td>  
                     <td width="70%">'.$row["shipping-price"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Shipping-tax</label></td>  
                     <td width="70%">'.$row["shipping-tax"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Gift-wrap-price</label></td>  
                     <td width="70%">'.$row["gift-wrap-price"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Gift-wrap-tax</label></td>  
                     <td width="70%">'.$row["gift-wrap-tax"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Item-promotion-discount</label></td>  
                     <td width="70%">'.$row["item-promotion-discount"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Ship-promotion-discount</label></td>  
                     <td width="70%">'.$row["ship-promotion-discount"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Ship-city</label></td>  
                     <td width="70%">'.$row["ship-city"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Ship-state</label></td>  
                     <td width="70%">'.$row["ship-state"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Ship-postal-code</label></td>  
                     <td width="70%">'.$row["ship-postal-code"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>Ship-country</label></td>  
                     <td width="70%">'.$row["ship-country"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>Promotion-ids</label></td>  
                     <td width="70%">'.$row["promotion-ids"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>Is-business-order</label></td>  
                     <td width="70%">'.$row["is-business-order"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>Purchase-order-number</label></td>  
                     <td width="70%">'.$row["purchase-order-number"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>Price-designation</label></td>  
                     <td width="70%">'.$row["price-designation"].'</td>  
                </tr>
				
                ';  
      }  
      echo "</table></div>";    
 }
   
 ?>
