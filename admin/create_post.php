<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Post</title>
</head>
<body>

    <main>
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-2"></div>

            <div class="col-md-2"></div>
        </div>
    </main>
    
</body>
</html>

<?php

session_start();

if (!isset($_SESSION['user_id'])) {
	header("Location: login.php");
}



?><!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/second-style.css">
    <link rel="stylesheet" href="../scss/bootstrap/_variables.scss">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<h1><a href="index.html" class="logo">Blog</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="create_post.php">Create Post</a>
                </li>
                <li>
                    <a href="#">Manage Post</a>
                </li>
                <li>
                    <a href="#"></a>
                </li>
	            </ul>
	          </li>
	          <li>
	              <a href="#">Send Notification</a>
	          </li>
	          <li>
              <a href="#">Manage Users</a>
	          </li>
	          <li>
              <a href="#">Logout</a>
	          </li>
	        </ul>

	        <div class="mb-5">
						
					</div>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="icon-heart" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank">E</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <h2 class="mb-4">Welcome, Emmanuel</h2>


        <main>

        <!-- dashboard boxes -->
        <main>
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 shadow-lg">
                <h4 class="mt-2">Create Post</h4><hr>

                <form action="">
                    <input type="text" class="form-control" placeholder="Enter Title"><br>

                    <input type="file" class="form-control" placeholder="Enter Image"><br>

                    <textarea name="" id="" cols="50" rows="30" class="form-control">Enter details of story here</textarea><br>

                    <button class="btn btn-success form-control mb-5">Post</button>
                </form>
            </div>

            <div class="col-md-3"></div>
        </div>
    </main>

        </main>
        
      </div>
		</div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>