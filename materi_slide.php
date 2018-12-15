<?php 
  if(isset($_GET['no'])){
    $no=$_GET['no'];
  }else{
    $no='none';
  }
 ?>
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
  .dropdown-container{
    display: none;
    padding-left: 7%;
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
              <button class="dropdown-btn" style="background-color: aqua; font-weight: bold; color: #fff">Slide <i class="fa fa-caret-down" style="float: right;"></i></button>
              <div class="dropdown-container" <?php  if($no!=='none'){echo "style='display:block;'";}?>>
                <a class="dropdown-btn btn-link" href="materi_slide.php?no=1" type="button" style="color: #fff; margin-top: 3%; font-size: 15px; <?php  if($no==1){echo "background-color: aqua; font-weight: bold;";}?>">Fungsi <span>Dependency</span></a>
                <a class="dropdown-btn btn-link" href="materi_slide.php?no=2" type="button" style="color: #fff; margin-top: 3%; font-size: 15px; <?php  if($no==2){echo "background-color: aqua; font-weight: bold;";}?>">FD <span>(Inggris)</span></a>
                <a class="dropdown-btn btn-link" href="materi_slide.php?no=3" type="button" style="color: #fff; margin-top: 3%; font-size: 15px; <?php  if($no==3){echo "background-color: aqua; font-weight: bold;";}?>">Normalisasi <span>Telkom</span></a>
                <a class="dropdown-btn btn-link" href="materi_slide.php?no=4" type="button" style="color: #fff; margin-top: 3%; font-size: 15px; <?php  if($no==4){echo "background-color: aqua; font-weight: bold;";}?>">Definisi <span>Normalisasi</span></a>
                <a class="dropdown-btn btn-link" href="materi_slide.php?no=5" type="button" style="color: #fff; margin-top: 3%; font-size: 15px; <?php  if($no==5){echo "background-color: aqua; font-weight: bold;";}?>">Normalisasi</a>
                <a class="dropdown-btn btn-link" href="materi_slide.php?no=6" type="button" style="color: #fff; margin-top: 3%; font-size: 15px; <?php  if($no==6){echo "background-color: aqua; font-weight: bold;";}?>">Normal 3 <span>dan BCNF</span></a>
                <a class="dropdown-btn btn-link" href="materi_slide.php?no=7" type="button" style="color: #fff; margin-top: 3%; font-size: 15px; <?php  if($no==7){echo "background-color: aqua; font-weight: bold;";}?>">Normalisasi <span>(Inggris)</span></a>
              </div>
          </div>
          <div style="margin-top:3%; left: 5%; width: 90%; position: relative;">
              <a class="dropdown-btn btn-link" href="materi_video.php" type="button" style="color: #fff">Video</a>
          </div>
        </div>
        <!--main-->
        <div id='isi' style="width: 79.8%; top: 8.2%; height: 83%; position: fixed; top: 8%; left: 20.2%; float: right; background-color:rgba(255,255,255,0.8);">
            <?php
              if($no==1){
                echo '<embed src="slide/FunctionalDependency1.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="100%"> </embed>';
              }else if($no==2){
                echo '<embed src="slide/Functional-Dependency-2.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="100%"> </embed>';
              }else if($no==3){
                echo '<embed src="slide/normalisasi telkom.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="100%"> </embed>';
              }else if($no==4){
                echo '<embed src="slide/definisi dan tujuan.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="100%"> </embed>';
              }else if($no==5){
                echo '<embed src="slide/Normalisasi.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="100%"> </embed>';
              }else if($no==6){
                echo '<embed src="slide/normal 3 dan bcnf.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="100%"> </embed>';
              }else if($no==7){
                echo '<embed src="slide/Materi-Normalisasi.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="100%"> </embed>';
              }else{
                echo "<script>document.getElementById('isi').style.overflow = 'auto';</script>";
                include('slide.php');
              }
             ?>
            
        </div>
        <?php 
          include("footer.php");
         ?>
</body>
<script type="text/javascript">
  var dropdown = document.getElementsByClassName('dropdown-btn');
  var i;
  for (i =0; i < dropdown.length; i++) {
    dropdown[i].addEventListener('click', function() {
      this.classList.toggle('active');
      var dc = this.nextElementSibling;
      if(dc.style.display==='block'){
        dc.style.display='none';
      }else{
        dc.style.display='block';
      }
    });
  }
</script>
</html>