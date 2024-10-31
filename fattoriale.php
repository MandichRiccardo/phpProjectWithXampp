
<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>home</title>
	</head>
	<body>
		<table border="">
			<tr>
				<td colspan=2>fattoriale</td>
			</tr>
			<tr>
				<td>numero di<br>
				partenza</td>
				<td>fattoriale
				<?php echo fattoriale(3); ?></td>
			</tr>
			<?php
				/**
				 * /funzione ricorsiva che ritorna il fattoriale del numero passato come parametro
				 * @param int $n il numero di cui calcolare la ricorsione
				 * @return int il risultato del fattoriale
				 */
				function fattoriale($n){
					if($n <0) return 0;
					if($n == 0) return 1;
					return $n * fattoriale($n-1);
				}
				//$i=
				for($i = 1; $i<=172; $i++){
					echo "<tr><td>" . $i . "</td><td>" . fattoriale($i) . "</td></tr>";
				}
				echo "</table>";
			?>
	</body>
	<style>
		table{
			text-align: center;
			position: relative;
			left: 50%;
			transform: translate(-50%);
		}
	</style>
</html>