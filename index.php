<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="3D Thumbnail Hover Effects" />
        <meta name="keywords" content="3d, 3dtransform, hover, effect, thumbnail, overlay, curved, folded" />
        <meta name="author" content="Codrops" />
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

a{
	text-decoration: none;
}
nav {
  max-width: 960px;
  mask-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #ffffff 25%, #ffffff 75%, rgba(255, 255, 255, 0) 100%);
  margin: 0 auto;
  padding: 20px 0;
}

nav ul {
  text-align: center;
  background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0.2) 75%, rgba(255, 255, 255, 0) 100%);
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  padding: 12px;
  font-family: "Open Sans";
  text-transform: uppercase;
  color: rgba(0, 35, 122, 0.5);
  font-size: 18px;
  text-decoration: none;
  display: block;
}

nav ul li a:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
  background: rgba(255, 255, 255, 0.1);
  color: rgba(0, 35, 122, 0.7);
}

		</style>
    </head>
    <body>
<nav>
  <ul>
    <li>
      <a href="#">Home</a>
    </li>
    <li>
      <a href="#">About</a>
    </li>
	<li style="letter-spacing: 2px; background: #D2D5D6;">
      <a href="#"><b><h3>J-WIRE</h3></b></a>
    </li>
    <li>
      <a href="#">Services</a>
    </li>
    <li>
      <a href="#">Contact</a>
    </li>
  </ul>
</nav>
            <div id="grid" class="main">
				<div class="view">
					<div class="view-back">
						
						<a href="indexmain.php"><label>DATA ORDERS</label>&rarr;</a>
						<a href="inventorymain.php" style="bottom:200px;"><label>INVENTORY SYSTEM</label>&rarr;</a>
					</div>
					<img src="images/one.jpg" />
				</div>
			</div>
        </div>
		<script type="text/javascript">	
			
			Modernizr.load({
				test: Modernizr.csstransforms3d && Modernizr.csstransitions,
				yep : ['http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js','js/jquery.hoverfold.js'],
				nope: 'css/fallback.css',
				callback : function( url, result, key ) {
						
					if( url === 'js/jquery.hoverfold.js' ) {
						$( '#grid' ).hoverfold();
					}

				}
			});
				
		</script>
    </body>
</html>