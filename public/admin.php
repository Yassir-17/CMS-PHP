
<title>Admin page</title>
</head>
<body>

<?php
        include ('../includes/layouts/header.php');
        include ('../includes/functions.php');
        include ('../includes/conn.inc.php');

        $query = "SELECT * FROM `cms_navbar` WHERE 1";
        $result = mysqli_query($conn, $query);
    
        if(mysqli_num_rows($result)> 0) {
                
         

?>
	<!-- Start navbar -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link" href="admin.php">CMS</a>
			</li>
		</ul>
		<button class="navbar-toggler" type="button" data-toggle="collapse" 
			data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" 
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<?php

					while($row = mysqli_fetch_assoc($result)) {
					echo  " <li class='nav-item'>
								<a class='nav-link' 
								href='". lcfirst(str_replace([' ', '-', '_'], '', $row["item_name"])) .".php'>". $row["item_name"] ."</a>
							</li> ";
					}
					} //End if $result
					mysqli_free_result($result);

				?>
				<!-- Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown01" 
						data-toggle="dropdown" aria-expanded="false">Admin Tools
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown01">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Separated link</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li> <!-- End Dropdown Menu -->
			</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
		</div>
	</nav> <!-- End navbar -->

	<div class="container" role="main">
		<div class="jumbotron">
			<h1>Admin Area</h1>
			<p>welcome to control panel!</p>
			<p>
				<a href="manage_content.php" type="button" class="btn btn-lg btn-danger">Manage Content</a>
				<a href="admin.php" type="button" class="btn btn-lg btn-primary">Admins</a>
				<a href="logout.php" type="button" class="btn btn-lg btn-success">Logout</a>
			</p>
		</div>
	</div>
<?php
    include ('../includes/layouts/footer.php')
?>