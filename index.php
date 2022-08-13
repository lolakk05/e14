<?php
	$connect = mysqli_connect("localhost","root","","e14styczen2020");
?>
<!DOCTYPE html>
	<head>
		<META CHARSET="utf-8">
		<title>Nasz sklep komputerowy</title>
		<link rel="stylesheet" href="styl8.css">
	</head>
	<body>
	<div id="blok_menu">
		<a href="index.php">Główna</a>
		<a href="procesory.html">Procesory</a>
		<a href="ram.html">RAM</a>
		<a href="grafika.html">Grafika</a>
	</div>
	<div id="blok_logo"><h2>Podzespoły komputerowe</h2></div>
	<div id="blok_główny">
		<h1>Dzisiejsze promocje</h1>
		<table>
			<tr>
				<th>NUMER</th>
				<th>NAZWA PODZESPOŁU</th>
				<th>OPIS</th>
				<th>CENA</th>
			</tr>
			<?php 
				$zapytanie = mysqli_query($connect, "SELECT id,nazwa,opis,cena FROM podzespoly WHERE cena<1000");
				while($kolumna = mysqli_fetch_array($zapytanie)) {
					echo "<tr>"."<td>".$kolumna[0]."</td>"."<td>".$kolumna[1]."</td>"."<td>".$kolumna[2]."</td>"."<td>".$kolumna[3]."</td>"."</>";
				}
			?>
		</table>
	</div>
	<div id="blok_stopki">
		<img src="scalak.jpg" alt="promocje na procesory">
	</div>
	<div id="blok_stopki">
		<h4>Nasz Sklep Komputerowy</h4>
		<p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a>
	</div>
	<div id="blok_stopki">
		<p>zadzwoń: 601 602 603</p>
	</div>
	<div id="blok_stopki">
		<p>Stronę wykonał: <a href="https://github.com/lolakk05">lolakk05</a></p>
	</div>
	</body>
</html>
<?php
	mysqli_close($connect);
?>