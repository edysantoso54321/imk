<!DOCTYPE html>
<html>
<head>
  <title>IMK</title>
  <meta charset='utf-8'/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php  
  $stack=array();
  include('conn.php');
  if((isset($_POST["kat"])) || (isset($_GET["kat"]))){
    $kat = isset($_GET["kat"]) ? $_GET["kat"] : $_POST["kat"];
    if(isset($_POST["kat"])){
      $nama=addslashes($_POST['nama']);
      $pertanyaan=addslashes($_POST['pertanyaan']);
      $kategori=addslashes($kat);
      $page=0;
      $cek=mysqli_query($conn,"select id from pertanyaan where pertanyaan='$pertanyaan' and kat='kat$kategori'");
      foreach ($cek as $key) {
        $page=$key['id'];
      }
      if($page){
        echo "<script>alert('maaf pertanyaan sudah pernah ditanyakan');</script>";
        echo "<meta http-equiv='refresh' content='0; url=#$page'>";
      }else{
        mysqli_query($conn,"insert into pertanyaan (nama, pertanyaan, kat) values('$nama','$pertanyaan','kat$kategori')");
        $cek=mysqli_query($conn,"select id from pertanyaan where pertanyaan='$pertanyaan' and kat='kat$kategori'");
        foreach ($cek as $key) {
          $page=$key['id'];
        }
        echo "<meta http-equiv='refresh' content='0; url=#$page'>";
      }
    }
  }else if ((isset($_POST['komentar'])) && (isset($_POST['id']))){
    $page=addslashes($_POST['id']);
    $kat=1;
    $cek=mysqli_query($conn,"select kat from pertanyaan where id=$page");
    if($cek){
      $coment=addslashes($_POST['komentar']);
      mysqli_query($conn,"insert into coment values($page,'$coment')");
    }
    foreach ($cek as $key) {
      $kat=$key['kat'];
    }
    echo "<meta http-equiv='refresh' content='0; url=#$page'>";
  }else{
    $kat=1;
  }
?>
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
</style>
<body style="position: fixed; height: 100%; width: 100%; background-image: url(css/bg.jpg); background-size: cover;">
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
        		  <a class="dropdown-btn" href="#" type="button" style="background-color: aqua">Diskusi</a>
        	</div>
          <div style="margin-top:3%; left: 5%; width: 90%; position: relative;">
              <a id='kat1' class="dropdown-btn btn-link" href="listpertanyaan.php?kat=1" type="button" style="color: #fff; font-size: 16px;">Normalisasi 1</a>
          </div>
          <div style="margin-top:3%; left: 5%; width: 90%; position: relative;">
              <a id='kat2' class="dropdown-btn btn-link" href="listpertanyaan.php?kat=2" type="button" style="color: #fff; font-size: 16px;">Normalisasi 2</a>
          </div>
          <div style="margin-top:3%; left: 5%; width: 90%; position: relative;">
              <a id='kat3' class="dropdown-btn btn-link" href="listpertanyaan.php?kat=3" type="button" style="color: #fff; font-size: 16px;">Normalisasi 3</a>
          </div>
          <?php  
            if($kat==2){
              $query=mysqli_query($conn,"select id,nama,pertanyaan from pertanyaan where kat='kat2' order by id desc");
              echo "<script>document.getElementById('kat2').style.backgroundColor = 'aqua';
                            document.getElementById('kat2').style.fontWeight = 'bold';
                            document.getElementById('kat2').classList.remove('btn-link');
                            document.getElementById('kat2').href='#';
                    </script>";
            }else if($kat==3){
              $query=mysqli_query($conn,"select id,nama,pertanyaan from pertanyaan where kat='kat3' order by id desc");
              echo "<script>document.getElementById('kat3').style.backgroundColor = 'aqua';
                            document.getElementById('kat3').style.fontWeight='bold';
                            document.getElementById('kat3').classList.remove('btn-link');
                            document.getElementById('kat3').href='#';
                    </script>";
            }else{
              $query=mysqli_query($conn,"select id,nama,pertanyaan from pertanyaan where kat='kat1' order by id desc");
              echo "<script>document.getElementById('kat1').style.backgroundColor = 'aqua';
                            document.getElementById('kat1').style.fontWeight='bold';
                            document.getElementById('kat1').classList.remove('btn-link');
                            document.getElementById('kat1').href='#';
                    </script>";
            }
          ?>
        </div>
        <!--main-->
        <div style="width: 79.5%; top: 8.2%; height: 83%; position: fixed; top: 8%; left: 20.2%; float: right; overflow: auto;">
          <div style="width: 100%; height: 100%; position: relative; background-color:rgba(255,255,255,0.5); float: right; overflow-x: none; overflow-y: auto;">
            <?php 
              foreach ($query as $key):
                $id=$key['id'];
                array_push($stack, $id);
             ?>
            <div id="<?php echo $id; ?>"class="card" style="background-color: #fff; margin-left: 5%; margin-right: 5%; position: relative; margin-top: 2%; margin-bottom: 2%; width: 90%; padding: 2%; border-radius: 5px;">
              <div class="card-body" style="position: relative;">
                <h5 class="card-text" style="border-bottom: 1px solid #5f5f5f; font-weight: bold;">
                  <?php echo $key['nama']." : <br>".$key['pertanyaan']; ?>
                </h5>
                <p class="card-text">
                  <ul>
                    <?php
                      $coment=mysqli_query($conn,"select coment from coment where id=$id");
                      foreach ($coment as $data) {
                        echo "<li>".$data['coment']."</li>";
                      } 
                    ?>
                  </ul>   
                </p> 
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#mymodal<?php echo $id; ?>" style="position: relative; float: right;">Balas</a><br><br>
              </div>
            </div>
            <?php 
              endforeach;
             ?>
          </div>
        </div>
        <?php 
          include("footer.php");
         ?>
</body>
</html>


<?php 
  foreach ($stack as $data):
 ?>

 <div class="modal fade" id="mymodal<?php echo $data; ?>" role="dialog">
  <div class="modal-dialog">
  <!-- Modal content-->
    <div class="modal-content" style="background-color: dodgerblue">
      <div class="modal-header" style="border: 0px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="color: #fff; font-weight: bold;">Masukan Balasan</h3>
      </div>
      <form action="listpertanyaan.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="id" value="<?php echo$data; ?>">
          <div style="margin-right: 5%; margin-left: 5%; color: #fff">
            <textarea type="" name="komentar" style="width: 100%; color: black;" rows="6" placeholder="Masukan komentar" required=""></textarea>
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

<?php 
  endforeach;
 ?>