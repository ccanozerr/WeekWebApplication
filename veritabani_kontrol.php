<?php
	include 'veritabani.php'; // veritabani ile baglanti kurulur
	if(empty($_SESSION)) // veritabani baglantisi kontrol edilir
		session_start();
	if(!isset($_POST['giris_butonu'])){ // kullanici girisi yapilmamis ise
		header("Location: index.php"); // index.php ye yonlendir
		exit; 
	}
	$sorgu = "SELECT * FROM kullanici WHERE kullanici_adi = '".$_POST[kull_adi]."'"; // tablo degerlerini POST ile istenen kull_adi degiskeni sayesinde aliyoruz.
	$sorgu_sonuc = mysql_query($sorgu); // $sorgu_sonuc degiskenine $sorgu'nun basarili olup olmadigini dondurur(0/1).
	while($satir_sorgu = mysql_fetch_array($sorgu_sonuc)) { // $satir_sorgu degiskenine istenen satirlarin varolup olmadigini dondurur(...2,1,0). '0' dondugunde while dongusu sonlanir.
		if($satir_sorgu['kullanici_sifre']==$_POST['kull_sifre']){ // kullanici_sifre degiskeni ile POST ile gonderilen kull_sifre degiskeni ayni ise
			$_SESSION['kull_adi'] = $_POST['kull_adi']; // kull_adi degiskeni ile POST ile gonderilen kull_adi degiskeni ayni ise
			header("Location: anasayfa.php"); // anasayfa.php ye yonlendir
			exit; 
		}	
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
				<!- ornek alinan kaynak http://www.koddunyasi.net/makale_detay.aspx?makale_ID=253&m_KTG_ID=3&m_KTG=PHP ->
				<?php header("refresh:4;url=index.php"); // Kullanici girisi yanlis ise 4 saniye sonra index.php ye gonderir
					die('&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Girilen kullanici adi veya sifre <b>hatali</b>...</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;4 saniye sonra giris sayfasina yonlendirileceksiniz.</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Bu süreyi beklememek için <a href="index.php">TIKLAYINIZ</a>');
				?>
				</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
				</div>
		</div>
		<div id="bottompage"></div>
		</div>
	</body>
</html>

