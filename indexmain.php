<?php  
 $connect = mysqli_connect("localhost", "root", "Mahima_1508", "details");  
 $query = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-08T%'";  
 $result = mysqli_query($connect, $query); 
$query1 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-09T%'";  
 $result1 = mysqli_query($connect, $query1);  
 $query2 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-10T%'";  
 $result2 = mysqli_query($connect, $query2); 
 $query3 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-11T%'";  
 $result3 = mysqli_query($connect, $query3); 
  $query4 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-12T%'";  
 $result4= mysqli_query($connect, $query4); 
  $query5 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-13T%'";  
 $result5= mysqli_query($connect, $query5);
 $query6 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-14T%'";  
 $result6= mysqli_query($connect, $query6);  
  $query7 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-15T%'";  
 $result7= mysqli_query($connect, $query7); 
  $query8 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-15T%'";  
 $result8= mysqli_query($connect, $query8);
 $query9 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-14T%'";  
 $result9= mysqli_query($connect, $query9); 
 $query10 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-13T%'";  
 $result10= mysqli_query($connect, $query10);  
 $query11 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-12T%'";  
 $result11= mysqli_query($connect, $query11); 
 $query12= "SELECT * FROM datainfo where purchase_date LIKE '2019-01-11T%'";  
 $result12= mysqli_query($connect, $query12); 
 $query13 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-10T%'";  
 $result13= mysqli_query($connect, $query13); 
 $query14 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-09T%'";  
 $result14= mysqli_query($connect, $query14); 
 $query15 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-08T%'";  
 $result15= mysqli_query($connect, $query15); 
  $query16 = "SELECT * FROM datainfo where purchase_date LIKE '2019-01-07T%'";  
 $result16= mysqli_query($connect, $query16);
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Data Information</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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

.accordion {
  background-color:#D2D5D6;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  align:center;
}

.active, .accordion:hover {
  background-color: black;
  color:white;
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}


</style>		   
      </head>  
<body>  
  
<br><br>
<h1 style="color:#1a468c;"><center><b>DATA ORDERS</b></center></h1>
<center><div style=" align: center;">
<div style="width:50%; align:center;  padding-left:20px;">		   
           <div class="container" style="width:700px;">   
                <button class="accordion">January 8, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>

			<div class="container" style="width:700px;">   
                <button class="accordion">January 9, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>  
		   
		   <div class="container" style="width:700px;">   
                <button class="accordion">January 10, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result2))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div> 
		
		<div class="container" style="width:700px;">   
                <button class="accordion">January 11, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result3))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <<td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td>   
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>
		   <div class="container" style="width:700px;">   
                <button class="accordion">January 12, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result4))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>
		   <div class="container" style="width:700px;">   
                <button class="accordion">January 13, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result5))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>
		   <div class="container" style="width:700px;">   
                <button class="accordion">January 14, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result6))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>
		   <div class="container" style="width:700px;">   
                <button class="accordion">January 15, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result7))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>
		   
		 
<div class="container" style="width:700px;">   
                <button class="accordion">January 16, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result8))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>		   
           <div class="container" style="width:700px;">   
                <button class="accordion">January 17, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result9))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>

			<div class="container" style="width:700px;">   
                <button class="accordion">January 18, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result10))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>  
		   
		   <div class="container" style="width:700px;">   
                <button class="accordion">January 19, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result11))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div> 
		
		<div class="container" style="width:700px;">   
                <button class="accordion">January 20, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result12))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>
		   <div class="container" style="width:700px;">   
                <button class="accordion">January 21, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result13))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>
		   <div class="container" style="width:700px;">   
                <button class="accordion">January 22, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result14))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>
		   <div class="container" style="width:700px;">   
                <button class="accordion">January 23, 2019</button>
				<div class="panel">
				<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ASIN ID</th>  
                               <th width="30%">VIEW DETAILS</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result15))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["asin"]; ?></td>  
                               <td><input type="button" name="view" value="View" id="<?php echo $row["asin"]; ?>" class="btn btn-s view_data" style="background:#1a468c; color:white;"/></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
				</div>
           </div>
		   
		
		  </div>		  
		  
		  </div>
		  <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"><b>DETAILS</b></h4>  
                </div>  
                <div class="modal-body" id="details">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  </center>
      </body>  
 </html>  
 
 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var asin = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{asin},  
                success:function(data){  
                     $('#details').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
 </script>
