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
  .active{
    background-color: green;
    color: white;
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
              <a class="dropdown-btn" href="#" style="background-color: aqua; font-weight: bold; color: #fff">Blog</a>
          </div>
          <div style="margin-top:3%; left: 5%; width: 90%; position: relative;">
              <a class="dropdown-btn btn-link" href="materi_slide.php" type="button" style="color: #fff">Slide</a>
          </div>
          <div style="margin-top:3%; left: 5%; width: 90%; position: relative;">
              <a class="dropdown-btn btn-link" href="materi_video.php" type="button" style="color: #fff">Video</a>
          </div>
        </div>
        <!--main-->

        
        <div style="width: 79.8%; top: 8.2%; height: 83%; position: fixed; top: 8%; left: 20.2%; float: right; background-color:rgba(255,255,255,0.95); overflow: auto;">
          <div style="width: 98%; height: 100%; position: relative; padding-top: 2%; padding-left: 5%; padding-right: 5%; padding-bottom: 2%;">
            <center><h2>Normalisasi</h2></center>
            <p><strong>Normalisasi database</strong> merupakan suatu pendekatan sistematis untuk meminimalkan redundansi data pada suatu database agar database tersebut dapat bekerja dengan optimal. Jika anda seorang database administrator ketika terjadi sesuatu pada database seperti penurunan kinerja, mungkin anda akan ditanya apakah database tersebut telah di normalisasi?</p>
            <p><strong>Tujuan Normalisasi Database</strong></p>
            <p>Tujuan normalisasi database adalah untuk menghilangkan dan mengurangi redudansi data dan tujuan yang kedua adalah memastikan dependensi data (Data berada pada tabel yang tepat).</p>
            <p>Jika data dalam database tersebut belum di normalisasi maka akan terjadi 3 kemungkinan yang akan merugikan sistem secara keseluruhan.</p>
            <ol>
            <li>INSERT Anomali : Situasi dimana tidak memungkinkan memasukkan beberapa jenis data secara langsung di database.</li>
            <li>DELETE Anomali: Penghapusan data yang tidak sesuai dengan yang diharapkan, artinya data yang harusnya tidak terhapus mungkin ikut terhapus.</li>
            <li>UPDATE Anomali: Situasi dimana nilai yang diubah menyebabkan inkonsistensi database, dalam artian data yang diubah tidak sesuai dengan yang diperintahkan atau yang diinginkan.</li>
            </ol>
            <h3>Normalisasi Database</h3>
            <p><strong>Normalisasi database</strong> terdiri dari banyak bentuk, dalam ilmu basis data ada setidaknya 9 bentuk normalisasi yang ada yaitu 1NF, 2NF, 3NF, EKNF, BCNF, 4NF, 5NF, DKNF, dan 6NF. Namun dalam prakteknya dalam dunia industri bentuk normalisasi ini yang paling sering digunakan ada sekitar 5 bentuk.</p>
            <p><strong><b>Normal Form</b><br />
            </strong></p>
            <p>Data yang direkam dan dimasukkan secara mentah dalam suatu tabel pada bentuk ini sangat mungkin terjadi inkonsistensi dan anomali data</p>
            <p>Contoh Normal Form</p>
            <center>
              <img src="css/blog1.jpg" style="width: auto;">
              <figcaption>fig. 1 <i>Normalisasi database Normal Form</i></figcaption>
            </center>
            <p><strong>1. Normal Form (1NF)</strong></p>
            <p>Bentuk normal yang pertama atau 1NF mensyaratkan beberapa kondisi dalam sebuah database, berikut adalah fungsi dari bentuk normal pertama ini.</p>
            <ul>
            <li>Menghilangkan duplikasi kolom dari tabel yang sama.</li>
            <li>Buat tabel terpisah untuk masing-masing kelompok data terkait dan mengidentifikasi setiap baris dengan kolom yang unik (primary key).</li>
            </ul>
            <p>Contoh Normalisasi Database 1NF</p>
            <center>
              <img src="css/blog2.jpg">
              <figcaption>fig. 2 <i>Normalisasi database 1NF</i></figcaption>
            </center>
            <p>dari manual bon pembelian diatas kita dapat menjadi bentuk normal pertama dengan memisah-misahkan data pada atribut-atribut yang tepat dan bernilai atomik, juga seluruh record / baris harus lengkap adanya.</p>
            <p><strong>2. Normal form (2NF)</strong></p>
            <p>Syarat untuk menerapkan normalisasi bentuk kedua ini adalah data telah dibentuk dalam 1NF, berikut adalah beberapa fungsi normalisasi 2NF.</p>
            <ul>
            <li>Menghapus beberapa subset data yang ada pada tabel dan menempatkan mereka pada tabel terpisah.</li>
            <li>Menciptakan hubungan antara tabel baru dan tabel lama dengan menciptakan foreign key.</li>
            <li>Tidak ada atribut dalam tabel yang secara fungsional bergantung pada candidate key tabel tersebut.</li>
            </ul>
            <p>Contoh normalisasi database bentuk 2NF</p>
            <center>
              <img src="css/blog3.jpg">
              <figcaption>fig. 3 <i>Normalisasi database 2NF</i></figcaption>
            </center>
            <p>Bentuk normal kedua dengan melakukan dekomposisi tabel diatas menjadi beberapa tabel dan mencari kunci primer dari tiap-tiap tabel tersebut dan atribut kunci haruslah unik.</p>
            <p><strong>3. Normal Form (3NF)</strong></p>
            <p>Normalisasi database dalam bentuk 3NF bertujuan untuk menghilangkan seluruh atribut atau field yang tidak berhubungan dengan primary key. Dengan demikian tidak ada ketergantungan transitif pada setiap kandidat key. Syarat dari bentuk normal ketiga atau 3NF adalah :</p>
            <ul>
            <li>Memenuhi semua persyaratan dari bentuk normal kedua.</li>
            <li>Menghapus kolom yang tidak tergantung pada primary key.</li>
            </ul>
            <p>Contoh Normalisasi Database Bentuk 3NF</p>
            <p>Bentuk normal ketiga mempunyai syarat, setiap relasi tidak mempunyai atribut yang bergantung transitif, harus bergantung penuh pada kunci utama dan harus memenuhi bentuk normal kedua (2 NF).</p>
            <center>
              <img src="css/blog4.jpg">
              <figcaption>fig. 3 <i>Normalisasi database 3NF</i></figcaption>
            </center>
            <p><strong>BCNF <b>Boyce–Codd normal form</b></strong></p>
            <p>Merupakan sebuah teknik normalisasi database yang sering disebut 3.5NF, memiliki hubungan yang sangat erat dengan bentuk 3NF. Pada dasarnya adalah untuk menghandle anomali dan overlooping yang tidak dapat di handle dalam bentuk 3NF. Normalisasi database bentuk ini tergantung dari kasus yang disediakan, tidak semua tabel wajib di normalisasi dalam bentuk BCNF.</p>
            <br>
            <br>
            <br>
            <p><strong>Daftar Pustaka</strong></p>
            <p>https://www.coursehero.com/file/pmdb27/Bentuk-normal-yang-pertama-atau-1NF-mensyaratkan-beberapa-kondisi-dalam-sebuah/</p>
            <p>https://rudiawan16.wordpress.com/normalisasi-database-beserta-pengertian-dan-contohnya/</p>
            <p>http://dinitri.staff.gunadarma.ac.id/Downloads/files/53861/Alat++Bantu+PBD+%28Normalisasi%29+-+Pertemuan+14.docx</p>
            <p>http://www.academia.edu/12465366/Kliping_Tentang_Database</p>
            <p>http://repository.potensi-utama.ac.id/jspui/bitstream/123456789/104/4/BAB%20III.pdf</p>
            <p>http://kc.umn.ac.id/1726/3/BAB%20II.pdf</p>
            <p>https://www.scribd.com/document/346113587/Pengertian-Normalisasi</p>
            <p>http://elib.unikom.ac.id/download.php?id=256019</p>



          </div>
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