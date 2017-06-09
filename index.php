<?php
	error_reporting(0); 
	if(!isset($_GET['city'])) {
		echo '<script>
		window.onload = function() {
		document.getElementById("sec").innerHTML = "İl Seçin!";
		}
		</script>';
		
		}else{
		
		$myCode = '<a href="./"> Anasayfa </a>';
		
		echo '<script>
		window.onload = function() {
		document.getElementById("form").innerHTML = "<a href="https://www.w3schools.com">Visit W3Schools.com!</a>";
		}
		</script>';
		
		
		$q = $_GET["city"];
		$url = "http://www.namazvaktim.net/json/aylik/$q.json";
		$dosyayicek = file_get_contents($url); /* isim.txt dosyasının çalıştığımız dizinde olduğunu varsaydım. */
		
		$decodeislemi = json_decode($dosyayicek, true); /* eğer buradaki true yazan yer false yapılırsa veya tamamen kaldırılırsa nesne olarak işlem yapılabilir. */
		
		$il = $decodeislemi['namazvakitleri']['il'];
		$vakit =  ($decodeislemi['namazvakitleri']['vakitler'][0]['tarih']) ." ".($decodeislemi['namazvakitleri']['vakitler'][0]['aksam']); /* Sırayla giderek Click Here'a ulaştık. */
		
		$vakit = explode(".",$vakit);
		$gun = $vakit[0];
		$ay = $vakit[1]-1;
		
		$vakit = explode(" ",$vakit[2]);
		$yil = $vakit[0];
		$vakit = $vakit = explode(":",$vakit[1]);
		$saat = $vakit[0];
		$dakika = $vakit[1];
		
		
		$vakit = $yil.",".$ay.",".$gun.",".$saat.",".$dakika;
		
	}
?>


<!DOCTYPE html>
<html>
	<title>İftar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<style>
		body,h1 {font-family: "Raleway", sans-serif}
		body, html {height: 100%}
		.bgimg {
		background-image: url('bg.jpg');
		min-height: 100%;
		background-position: center;
		background-size: cover;
		}
		
		h1 {
		color: white;
		text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
		}
		p {
		color: white;
		text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
		}
		
	</style>
	<body>
		
		<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
			<div class="w3-display-topmiddle w3-padding-large w3-xlarge">
				<div id="form" class="w3-display">
					<form method="get">
						<select name="city">
							<option value="Adana">Adana</option>
							<option value="Adiyaman">Adıyaman</option>
							<option value="Afyon">Afyon</option>
							<option value="Agri">Ağrı</option>
							<option value="Aksaray">Aksaray</option>
							<option value="Amasya">Amasya</option>
							<option value="Ankara">Ankara</option>
							<option value="Antalya">Antalya</option>
							<option value="Ardahan">Ardahan</option>
							<option value="Artvin">Artvin</option>
							<option value="Aydin">Aydın</option>
							<option value="Balıkesir">Balıkesir</option>
							<option value="Bartin">Bartın</option>
							<option value="Batman">Batman</option>
							<option value="Bayburt">Bayburt</option>
							<option value="Bilecik">Bilecik</option>
							<option value="Bingol">Bingöl</option>
							<option value="Bitlis">Bitlis</option>
							<option value="Bolu">Bolu</option>
							<option value="Burdur">Burdur</option>
							<option value="Bursa">Bursa</option>
							<option value="canakkale">Çanakkale</option>
							<option value="cankiri">Çankırı</option>
							<option value="corum">Çorum</option>
							<option value="Denizli">Denizli</option>
							<option value="Diyarbakir">Diyarbakır</option>
							<option value="Düzce">Düzce</option>
							<option value="Edirne">Edirne</option>
							<option value="Elazig">Elazığ</option>
							<option value="Erzincan">Erzincan</option>
							<option value="Erzurum">Erzurum</option>
							<option value="Eskisehir">Eskişehir</option>
							<option value="Gaziantep">Gaziantep</option>
							<option value="Giresun">Giresun</option>
							<option value="Gumushane">Gümüşhane</option>
							<option value="Hakkari">Hakkari</option>
							<option value="Hatay">Hatay</option>
							<option value="igdir">Iğdır</option>
							<option value="isparta">Isparta</option>
							<option value="icel">İçel</option>
							<option value="istanbul">İstanbul</option>
							<option value="izmir">İzmir</option>
							<option value="Kahramanmaras">Kahramanmaraş</option>
							<option value="Karabuk">Karabük</option>
							<option value="Karaman">Karaman</option>
							<option value="Kars">Kars</option>
							<option value="Kastamonu">Kastamonu</option>
							<option value="Kayseri">Kayseri</option>
							<option value="Kirikkale">Kırıkkale</option>
							<option value="Kirklareli">Kırklareli</option>
							<option value="Kirsehir">Kırşehir</option>
							<option value="Kilis">Kilis</option>
							<option value="Kocaeli">Kocaeli</option>
							<option value="Konya">Konya</option>
							<option value="Kutahya">Kütahya</option>
							<option value="Malatya">Malatya</option>
							<option value="Manisa">Manisa</option>
							<option value="Mardin">Mardin</option>
							<option value="Muğla">Muğla</option>
							<option value="Mus">Muş</option>
							<option value="Nevsehir">Nevşehir</option>
							<option value="Nigde">Niğde</option>
							<option value="Ordu">Ordu</option>
							<option value="Osmaniye">Osmaniye</option>
							<option value="Rize">Rize</option>
							<option value="Sakarya">Sakarya</option>
							<option value="Samsun">Samsun</option>
							<option value="Siirt">Siirt</option>
							<option value="Sinop">Sinop</option>
							<option value="Sivas">Sivas</option>
							<option value="Sanliurfa">Şanlıurfa</option>
							<option value="Sirnak">Şırnak</option>
							<option value="Tekirdag">Tekirdağ</option>
							<option value="Tokat">Tokat</option>
							<option value="Trabzon">Trabzon</option>
							<option value="Tunceli">Tunceli</option>
							<option value="Usak">Uşak</option>
							<option value="Van">Van</option>
							<option value="Yalova">Yalova</option>
							<option value="Yozgat">Yozgat</option>
							<option value="Zonguldak">Zonguldak</option>
						</select>
						
						<input type="submit" value="Seç">
					</form>
				</div>
				<h1 class="w3-jumbo w3-animate-top"><?php echo $il;?></h1>
				<h1 id ="sec" class="w3-large-center w3-animate-top">için iftara kalan süre</h1>
				<hr class="w3-border-grey" style="margin:auto;width:100%">
				<p  id ="demo" class="w3-jumbo w3-center"></p>
			</div>
			
		</div>
		
		<script>
			// Set the date we're counting down to
			var countDownDate = new Date(<?php echo $vakit;?>).getTime();
			
			// Update the count down every 1 second
			var x = setInterval(function() {
				
				// Get todays date and time
				var now = new Date().getTime();
				
				// Find the distance between now an the count down date
				var distance = countDownDate - now;
				
				// Time calculations for days, hours, minutes and seconds
				var days = Math.floor(distance / (1000 * 60 * 60 * 24));
				var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				var seconds = Math.floor((distance % (1000 * 60)) / 1000);
				
				// Output the result in an element with id="demo"
				document.getElementById("demo").innerHTML = hours +":"+ minutes +":"+  seconds;
				
				// If the count down is over, write some text 
				if (distance < 0) {
					clearInterval(x);
					document.getElementById("demo").innerHTML = "Afiyet olsun..";
				}
			}, 1000);
		</script>
		
	</body>
</html>
