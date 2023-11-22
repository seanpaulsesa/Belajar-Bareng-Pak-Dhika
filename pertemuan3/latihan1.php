<?php
	// perulangan
// for 
// while
// do....while
// foreach : pengulangan kusus array


// for($i = 0; $i < 5; $i++ ) {
	
	// echo "Hello Pace Koding! <br>";
// }

// $i = 0;
// while ($I < 5 ) {
	// echo "Hello, Pace Koding! <br>";
// $i++;
// }

// $i = 0;
// do {
// 	echo "Hello, Pace Koding! <br>";
// 	$i++;
// } while ($i) {
// 	// echo "Hello, Pace Koding <br>";
// 	$i++;
// }
// $i = 10;
// do {
// 	echo "Hello, Pace Koding! <br>";
// 	$i++;
// } while( $i < 5);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan</title>

	<style>
		.warna-baris {
			background-color: silver;
		}
	</style>
</head>
<body>

	<table border="1" cellpadding="10" cellspacing="0">
		<!-- <tr>
			<td>1,1</td>
			<td>1,2</td>
			<td>1,3</td>
			<td>1,4</td>
			<td>1,5</td>
		</tr>
		<tr>
			<td>1,1</td>
			<td>1,2</td>
			<td>1,3</td>
			<td>1,4</td>
			<td>1,5</td>
		</tr> -->

		<?php
			// for($i = 1; $i <= 3; $i++ ) {
			// 	echo "<tr>";
			// 	for($j = 1; $j <= 5; $j++) {
			// 		echo "<td>$i,$j</td>";
			// 	}
			// 	echo "</tr>";
			// }



			<?php for( $i = 1; $i <= 5; $i++ ) :?>
				<?php if( $i % 2 == 0 ) : ?>
					<tr class="warna-baris">
					<?php else : ?>
					<tr>
						<?php endif; ?>
						<?php for($j = 1; $j <= 5; $j++) : ?>
							<td><?= "$i, $j"; ?></td>
						<?php endfor; ?>
					</tr>

			<?php endfor; ?>
	</table>
					</tr>


</body>
</html>
