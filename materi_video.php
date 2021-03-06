<!DOCTYPE html>
<html>
<head>
	<title>IMK</title>
	<meta charset='utf-8'/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="css/jquery.min.js"></script>
  	<script src="css/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<style type="text/css">
	.sidenav {
    	height: 91.3%;
    	width: 250px;
    	position: fixed;
    	z-index: 1;
    	top: 0;
    	left: 0;
    	background-color: darkblue;
    	overflow-x: hidden;
	}
	.sidenav a, .dropdown-btn {
    	padding: 6px 8px 6px 16px;
    	text-decoration: none;
    	font-size: 18px;
    	color: black;
    	display: block;
    	border: none;
    	background: none;
    	width: 100%;
    	text-align: left;
    	cursor: pointer;
    	outline: none;
	}
  .thumnil{
    border: 1px solid #ddd; /* Gray border */
    border-radius: 8px;  /* Rounded border */
    padding: 5px; /* Some padding */
    background-color: #f5f5f5;
  }


</style>
<body style="position: fixed; height: 100%; width: 100%;background-image: url(css/bg.jpg); background-size: cover;">
		<!-- Navbar -->
        <nav class="navbar navbar-default clear-mbottom navbar-fixed-top atas" style="height: 55px; ">
          <div style="background-color: grey; height: 100%; position: absolute; z-index: 10000000">
            <a class="navbar-brand froz-font" style="font-size: 1.5em; color: black; margin-left: 1px;" href="index.php"><i class="fas fa-home"></i>Home</a>
          </div>
          <div style="background-color: blue; height: 100%; position: relative; width: 91.8%; float: right; z-index: 0">
            <a class="navbar-brand froz-font" style="font-size: 2em; color: white;font-family: sans-serif; font-weight: bold; margin-left: 40%; text-decoration: none;" href="index.php" title="Home">Belajar Normalisasi</a>
          </div>
        </nav>
        <div class="sidenav" style="width: 20%; top: 8.2%; height: 83%;">
        	<div style="margin-top:5%; left: 0%;">
        		  <a class="dropdown-btn" href="#" type="button" style="background-color: aqua">Materi</a>
        	</div>
          <div style="margin-top:3%; left: 5%; width: 90%; position: relative;">
              <a class="dropdown-btn btn-link" href="materi_blog.php" type="button" style="color: #fff">Blog</a>
          </div>
          <div style="margin-top:3%; left: 5%; width: 90%; position: relative;">
              <a class="dropdown-btn btn-link" href="materi_slide.php" type="button" style="color: #fff">Slide</a>
          </div>
          <div style="margin-top:3%; left: 5%; width: 90%; position: relative;">
              <a class="dropdown-btn" href="#" type="button" style="background-color: aqua; font-weight: bold; color: #fff">Video</a>
          </div>
        </div>
        <!--main-->
        <div id='isi' style="width: 79.8%; top: 8.2%; height: 83%; position: fixed; top: 8%; left: 20.2%; float: right; background-color:rgba(255,255,255,0.8); overflow: auto;">
          <?php 
            include('video.php');
          ?>
        </div>
        <?php 
          include("footer.php");
         ?>
</body>

</html>

<?php 
  include('modalvideo.php');
 ?>