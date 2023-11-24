<?php

include 'config.php';

if (isset($_POST['post_comment'])) {

	$name = $_POST['name'];
	$message = $_POST['message'];
	$email = $_POST['email'];

	$sql = "INSERT INTO comments (name, email, message)
		VALUES ('$name', '$email', '$message')";

	if ($conn->query($sql) === TRUE) {
		echo "";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="komen.css">
	<link rel="stylesheet" href="style.css">

</head>

<body>

	<nav class="navbar">
		<a href="#" class="navbar-title">Niu</a>
		<div class="navbar-nav">
			<a class="navbaramba active" href="indexx.php">Back</a>
		</div>
	</nav>

	<p class="form">Comment Form</p>
	<div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Name" required>
			<input type="text" class="email" name="email" value="@gmail.com" placeholder="loremipsum@gmail.com"
				required>
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message" required></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment" onclick="buttonPress()">Post Comment</button>
		</form>
	</div>

	<div class="content">
		<p class="list">List Comment<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
				class="bi bi-caret-down-fill" viewBox="0 0 16 16">
				<path
					d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
			</svg></p>
		<?php
		date_default_timezone_set('Asia/Jakarta');


		$sql = "SELECT * FROM comments";
		$result = $conn->query($sql);
		$waktu_sekarang = time();

		if ($result->num_rows > 0) {
			// output data of each row
			while ($row = $result->fetch_assoc()) {
				$timestamp_unix = strtotime($row['timestamp']);

				$selisih_detik = $waktu_sekarang - $timestamp_unix;


				if ($selisih_detik < 60) {
					$teks_waktu = $selisih_detik . " sec" . ($selisih_detik > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 3600) {
					$menit = floor($selisih_detik / 60);
					$teks_waktu = $menit . " min" . ($menit > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 86400) {
					$jam = floor($selisih_detik / 3600);
					$teks_waktu = $jam . " hour" . ($jam > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 2592000) {
					$hari = floor($selisih_detik / 86400);
					$teks_waktu = $hari . " day" . ($hari > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 31536000) {
					$bulan = floor($selisih_detik / 2592000);
					$teks_waktu = $bulan . " month" . ($bulan > 1 ? "s" : "") . " ago";
				} else {
					$tahun = floor($selisih_detik / 31536000);
					$teks_waktu = $tahun . " year" . ($tahun > 1 ? "s" : "") . " ago";
				}

				$tanggal = date('d-m-Y', strtotime($row['timestamp']));
				?>
				<h3 id="name">
					<?php echo $row['name']; ?>
				</h3>
				<h4 id="email">
					<?php echo $row['email']; ?>
				</h4>

				<div style="display: flex; justify-content: space-between; margin-right: -75px;">
					<p id="message">
						<?php echo $row['message']; ?>
					</p>
					<p>
						<?php echo $tanggal ?>
						<?php echo $teks_waktu ?>
					</p>
				</div>

			<?php }
		} ?>
	</div>
	<script>
		//PESAN
		var sensor = ["bot", "cuki", "anjing", "jelek", "kemem", "bangsat", "kontol", 
		"peler", "pler", "meki", "memek", "ngentot", "babi", "ayam", "jenglot", 
		"kimak", "ngentot", "gpblok"]
		function replaceTextInElements(elements) {
			elements.forEach(function (element) {

				var originalText = element.textContent;


				var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function (match) {

					return '*'.repeat(match.length);
				});


				element.textContent = newText;
			});
		}


		var messageElements = document.querySelectorAll('p#message');


		replaceTextInElements(messageElements);

		//NAMA
		var sensor = ["anjing", "jelek", "kemem", "bangsat", 
		"kontol", "peler", "pler", "memek", "ngentot", "babi", 
		"ayam", "jenglot"]
		function replaceTextInElements(elements) {
			elements.forEach(function (element) {

				var originalText = element.textContent;


				var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function (match) {

					return '*'.repeat(match.length);
				});


				element.textContent = newText;
			});
		}


		var messageElements = document.querySelectorAll('h3#name');


		replaceTextInElements(messageElements);
	</script>
</body>

</html>