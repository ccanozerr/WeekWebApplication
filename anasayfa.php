<?php
	include 'veritabani.php'; // veritabani ile baglanti kurulur
	if(empty($_SESSION)) // veritabani baglantisi kontrol edilir
	   session_start();
	if(!isset($_SESSION['kull_adi'])){ // kullanici girisi yapilmamis ise
	   header("Location: index.php"); // index.php ye yonlendir
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
						<li><a class="active" href="anasayfa.php">Anasayfa</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="kurulum_dokumantasyonu.php">Kurulum Dokumantasyonu</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="sql_enjeksiyonu.php">SQL Enjeksiyonu</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="xss.php">XSS</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="komut_enjeksiyonu.php">Komut Enjeksiyonu</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						</br></br> <!- iki satir bosluk birakir ->
						<marquee behavior=alternate><b> Kullanici: <?php echo $_SESSION['kull_adi']; ?> </b></marquee> <!- kayan yazi ile kullanici ismini yazar ->
						<li><a href="cikis.php">Cikis Yap</a></li> <!- sayfanin solunda secenek butonu olusturur ->
					</ul>
				</div>
			</div>
			<div id="contents"> <!- sayfa icerigiyle ilgili govde kismi ->
				<h2>&emsp;Zayif Web Uygulamasi Nedir?</h2>
				</br><p>&emsp;Zayif Web Uygulamasi (ZWU) kasitli olarak birakilmis guvenlik zafiyetleri iceren PHP/MySQL web uygulamasidir.Kasitli olarak birakilmis guvenlik,zafiyetlerini (vulnerability) iceren zayif (vulnerable) web uygulamalari, uygulamali siber guvenlik egitimlerinde onemli bir rol oynamaktadir. Ogrenciler, yasal olmayan bir sekilde gercek sistemlere saldirmadan bu tip uygulamalar uzerinde ogrendiklerini tecrube ederek kendilerini gelistirebilmektedirler.</p>
				</br><p>&emsp;Farkli programlama dillerinde (PHP,ASP,C#,.NET,Node.js,PERL,Java,Ruby on Rails,Pyton,C++,ColdFusion vb.) yazilmis vulnerable web uygulamalari bulunmaktadir. Fakat, Turkce yazilmis ve iyi bir sekilde dokumantasyonu yapilmis vulnerable web uygulamalari yok denecek kadar azdir.</p>
				</br><p>&emsp;Bu projenin amaci ulkemizdeki siber guvenlik derslerinde kullanilabilecek bir duzeyde vulnerable web uygulamalari gelistirmektir. Bunun icin sadece uzerinde zafiyetler bulunan bir web uygulamasi gelistirmek yeterli degildir, bu uygulamadaki zafiyetlerin neden kaynaklandiginin ve bu zafiyetlerin nasil somuruleceginin (exploitation) de acik ve anlasilir bir sekilde dokumantasyonun yapilmasi gereklidir.</p>
				</br></br></br></br>
			</div>
		</div>
		<div id="bottompage">
			<div id="inner"><span><a href="popup_anasayfa.php" target="popup" onclick="window.open('popup_anasayfa.php','Yardim','width=600,height=400')">Yardim</a></span> <!- yardim butonu ->
				<a title="Proje Sorumlulari: ">Proje Sorumlulari : Onur Karakaya & Can Ozer</a> <!- proje sorumlulari->
			</div>
		</div>
	</body>
</html>
