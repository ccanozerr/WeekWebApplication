<?php
	include 'veritabani.php'; // veritabani ile baglanti kurulur
	if(empty($_SESSION)) // veritabani baglantisi kontrol edilir
	   session_start();
	if(isset($_SESSION['kull_adi'])) { // kullanici girisi yapilmis ise 
	   header("location: anasayfa.php"); // anasayfa.php ye yonlendir
	   exit; 
	}
?>

<html>
	<head>
		<title>YazLab II 3.Proje</title> <!- sayfanin sekme basligi ->
		<link href="style.css" rel="stylesheet" type="text/css" /> <!- style.css dosyasinda tanimlanmis duzenlemeleri ceker ->
		<link rel="shortcut icon" href="img/icon.ico"> <!- img/icon.ico dosyasini sayfa iconu yapar ->
	</head>
	<body>
		<div id="wrap">
			<div id="tophead"></div>
			<div id="header">
				<div id="logo">
					<h1 class="logotext">Yazilim <span>Laboratuvari II </span>3.Proje</h1> <!- sayfadaki baslik ->
				</div>
				<div>
					<h1>..................................................................................</h1>
				</div>
			</div>
			<div id="sidenotes">
				<div class="sidenav">
					<ul>
						<li><a class="active" href="index.php">Giris Ekrani</a></li> <!- sayfanin solunda secenek butonu olusturur ->
					</ul>
				</div>
			</div>
			<div id="contents">
				<form action = "veritabani_kontrol.php" method = "post"> <!- girilen degerlerin atanmis oldugu degiskenleri veritabani_kontrol.php dosyasina gonderir ->
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Kullanici_adi:&emsp;<input type="text" name="kull_adi" /><br /> <!- girilen degeri kull_adi degiskenine atar ->
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Kull._sifresi  :&emsp;<input type="password" name="kull_sifre" /><br /> <!- girilen degeri kull_sifre degiskenine atar ->
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type = "submit" name="giris_butonu" value="Giris" /> <!- alinan verileri gonderme islemini baslatir ->
				</form>
				</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
			</div>
		</div>
		<div id="bottompage">
			<div id="inner"><span><a href="popup_index.php" target="popup" onclick="window.open('popup_index.php','Yardim','width=600,height=400')">Yardim</a></span> <!- yardim butonu ->
				<a title="Proje Sorumlulari: ">Projeyi Hazirlayanlar : Onur Karakaya & Can Ozer</a> <!- proje sorumlulari->
			</div>
		</div>
	</body>
</html>
