<!DOCTYPE html>
<html>
<head>
	<title>IMK</title>
	<meta charset='utf-8'/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
</head>
<style>
#mymodal{
  z-index: 1000000;
}
.dropbtn {
    background-color: aqua;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    width: 150px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: lightblue;
    min-width: 150px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: aquamarine;}
p{
	color: white;
}
body{
  background: url(css/bg.jpg); background-size: cover;
}
</style>
<body style="position: fixed; width: 100%; height: 100%;">
  <div style="position: fixed; width: 100%; height: 100%; background-color:rgba(255,255,255,0.4);">
	<!-- Navbar -->
        <nav class="navbar navbar-default clear-mbottom navbar-fixed-top atas" style="text-align:center; align-content: center;background-color: blue; height: 55px;">
	            <div class="container-fluid">
	                <div class="navbar">
		                <a style="font-size: 2em; color: white;font-family: sans-serif; font-weight: bold; text-decoration: none; " href="#" title="Home">Belajar Normalisasi</a>
	                </div>
	            </div>
        </nav>
        <div class="container">
        <center>
        	<div style="margin-top: 17%;margin-left: 0px;">
	        	<div class="col-md-4" style="align-content: center;">
	        		<div class="dropdown">
  	    				<button class="dropbtn"><img src="css/book.png" style="width: 50px"><br>Materi</button>
  	    				<div class="dropdown-content">
  	      					<a href="materi_blog.php">Blog</a>
  	      					<a href="materi_slide.php">Slide</a>
  	      					<a href="materi_video.php">Video</a>
  	    				</div>
	  				  </div>
	  			  </div>
  	  			<div class="col-md-4" style="align-content: center;">
  	  				<div class="dropdown">
  	    				<button class="dropbtn"><img src="css/exam.png" style="width: 50px"><br>Latihan</button>
  	    				<div class="dropdown-content">
  	      					<a href="latihan.php">Mulai Latihan</a>
  	    				</div>
  	  				</div>
  	  			</div>
  	  			<div class="col-md-4" style="align-content: center;">
  	  				<div class="dropdown" style="width: 248px;">
  	    				<button class="dropbtn">
  	    				<img src="css/u.png" style="width: 50px"><br>Diskusi</button>
  	    				<div style="text-align: right; width: 200px;" class="dropdown-content">
  	      					<a href="#" data-toggle="modal" data-target="#myModal">Masukkan Pertanyaan</a>
  	      					<a href="listpertanyaan.php">List Pertanyaan</a>
  	    				</div>
  	  				</div>
    				</div>
        	</div>
        	</center>
        </div>
        <?php 
          include("footer.php");
         ?>
  </div>
</body>
</html>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <!-- Modal content-->
    <div class="modal-content" style="background-color: dodgerblue">
      <div class="modal-header" style="border: 0px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="color: #fff; font-weight: bold;">Masukan Pertanyaan</h3>
      </div>
      <form action="listpertanyaan.php" method="POST">
        <div class="modal-body">
          <div style="margin-right: 5%; margin-left: 5%; color: #fff">
            <b style="font-size: 20px;">Kategori</b>
            <select name="kat" style="position: relative; float: right; width: 70.2%; padding-left: 30%; padding-right: 10%; color: black; font-weight: bold; font-size: 20px">
              <option value="1">Normalisasi 1</option>
              <option value="2">Normalisasi 2</option>
              <option value="3">Normalisasi 3</option>
            </select><br><br> 
            <b style="font-size: 20px;">Nama</b>
            <input type="text" name="nama" style="position: relative; float: right; width: 70.2%; color: black" required placeholder="Masukan Nama"><br><br>
            <textarea type="" name="pertanyaan" style="width: 100%; color: black;" rows="6" placeholder="Masukan Pertanyaan" required=""></textarea>
          </div>
        </div>
        <div class="modal-footer" style="border: 0px; margin-right: 5%; margin-left: 5%;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success">
        </div>
      </form>
    </div>
  </div>
</div>