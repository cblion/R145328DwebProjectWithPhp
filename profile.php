
<!DOCTYPE html>
<html>
<title>MedBase Medical Systems
</title>
<link rel="stylesheet" href="css/Bootstrap.css" />
</head>
<body>
	<body>
	<h1>Welcome To</h1>
	<h1>MedBase Medical Systems</h1>
<div id="container">
	
	<header role="banner" id="main-header">
		<div id="logo">
		</div>
		
		<nav id="main_nav">
			<ul>
				<li><a href="project.html">Logout</a></li>
				<li><a href="project.html">Menu</a></li>
				<li><a href="project.html">About us</a></li>
				<li><a href="project.html">Contact us</a></li>
				<li><a href="project.html">Affiliates</a></li>
				
			</ul>
		</nav>
	</header> 
 <?php 
	echo "Welcome   ".( $_GET['username']);
?>
</body>
</html>