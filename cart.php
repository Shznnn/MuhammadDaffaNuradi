<?php
require 'add_koneksi.php';
$cs = query("SELECT * FROM cs");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="cart.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Estonia&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Corinthia&display=swap" rel="stylesheet">
</head>
<body>
	<div class="loader-wrapper">
		<div class="ring"></div>
		<span class="loding">loading...</span>
	</div>
	<div class="parallax">
		<div class="head-arutala">
			<div class="con-head">
				<h1>Arutala coffee</h1>
				<p>The secret of roasting</p>
			</div>
			<div class="con-headx">
				<h1>X</h1>
			</div>
			<div class="con-head">
				<h1>Unexpected</h1>
				<p>Team</p>
			</div>
			<div class="navbar">
				<ul>
					<li class="list">
						<a href="index.html">
							<span class="icon"><i class="fas fa-home"></i></span>
							<span class="text">Home</span>
						</a>
					</li>
					<li class="list">
						<a href="product.html">
							<span class="icon"><i class="fas fa-coffee"></i></span>
							<span class="text">Product</span>
						</a>
					</li>
					<li class="list">
						<a href="cart.php">
							<span class="icon"><i class="fas fa-shopping-cart"></i></i></span>
							<span class="text">Cart</span>
						</a>
					</li>
					<li class="list">
						<a href="#">
							<span class="icon"><i class="fas fa-phone-alt"></i></span>
							<span class="text">Contact</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="head">
				<h3>Daftar Belanja</h3>
			</div>	
		</div>
		<?php foreach ($penjualan = query("SELECT SUM(gayoarabica), SUM(gayorobusta), SUM(gayoluwak), SUM(jawarobusta), SUM(kopisusublend), SUM(robustatoraja), SUM(robustaflores), SUM(vietnam), SUM(arabicamandailing), SUM(arabicabali), SUM(excelsa), SUM(exoticblend) FROM penjualan") as $brg ) : ?>
			<?php foreach ($penjualan = query("SELECT SUM(gayoarabica)*42.000, SUM(gayorobusta)*40.000, SUM(gayoluwak)*120.000, SUM(jawarobusta)*28.000, SUM(kopisusublend)*30.000, SUM(robustatoraja)*32.000, SUM(robustaflores)*42.000, SUM(vietnam)*33.000, SUM(arabicamandailing)*42.000, SUM(arabicabali)*42.000, SUM(excelsa)*32.000, SUM(exoticblend)*45.000 FROM penjualan") as $hrg ) : ?>
				<?php foreach ($penjualan = query("SELECT SUM(gayoarabica)*42.000 + SUM(gayorobusta)*40.000 + SUM(gayoluwak)*120.000 + SUM(jawarobusta)*28.000 + SUM(kopisusublend)*30.000 + SUM(robustatoraja)*32.000 + SUM(robustaflores)*42.000 + SUM(vietnam)*33.000 + SUM(arabicamandailing)*42.000 + SUM(arabicabali)*42.000 + SUM(excelsa)*32.000 + SUM(exoticblend)*45.000 AS total FROM penjualan") as $total ) : ?>
		<div class="con-product">
		<div class="con">
			<div class="imgcon">
				<img src="gayo arabica.png">
			</div>
			<div class="body">
				<p>Gayo Arabica</p>
				<small>Jumlah: <?= $brg['SUM(gayoarabica)']; ?></small>
				<br><br>
				<small>Harga: IDR <?= $hrg['SUM(gayoarabica)*42.000']; ?></small>
			</div>
		</div>
		<div class="con">
			<div class="imgcon">
				<img src="gayo robusta.png">
			</div>
			<div class="body">
				<p>Gayo Robusta</p>
				<small>Jumlah: <?= $brg['SUM(gayorobusta)']; ?></small>
				<br><br>
				<small>Harga: IDR <?= $hrg['SUM(gayorobusta)*40.000']; ?></small>
			</div>
		</div>
		<div class="con">
			<div class="imgcon">
				<img src="gayo luwak liar.png">
			</div>
			<div class="body">
				<p>Gayo Luwak Liar</p>
				<small>Jumlah: <?= $brg['SUM(gayoluwak)']; ?></small>
				<br><br>
				<small>Harga: IDR <?= $hrg['SUM(gayoluwak)*120.000']; ?></small>
			</div>	
		</div>
		<div class="con">
			<div class="imgcon">
				<img src="jawa robusta.png">
			</div>
			<div class="body">
				<p>Jawa Robusta</p>
				<small>Jumlah: <?= $brg['SUM(jawarobusta)']; ?></small>
				<br><br>
				<small>Harga: IDR <?= $hrg['SUM(jawarobusta)*28.000']; ?></small>
			</div>
		</div>
		<div class="con">
			<div class="imgcon">
				<img src="kopi susu blend.png">
			</div>
			<div class="body">
				<p>Kopi Susu Blend</p>
			<small>Jumlah: <?= $brg['SUM(kopisusublend)']; ?></small>
			<br><br>
				<small>Harga: IDR <?= $hrg['SUM(kopisusublend)*30.000']; ?></small>
			</div>
		</div>
		<div class="con">
			<div class="imgcon">
				<img src="robusta toraja.png">
			</div>
			<div class="body">
				<p>Robusta Toraja</p>
				<small>Jumlah: <?= $brg['SUM(robustatoraja)']; ?></small>
				<br><br>
				<small>Harga: IDR <?= $hrg['SUM(robustatoraja)*32.000']; ?></small>
			</div>
		</div>
		<div class="con">
			<div class="imgcon">
				<img src="robusta-flores.png">
			</div>
			<div class="body">
				<p>Robusta flores</p>
				<small>Jumlah:
					<?= $brg['SUM(robustaflores)']; ?>
				</small>
				<br><br>
				<small>Harga: IDR
					<?= $hrg['SUM(robustaflores)*42.000']; ?>
				</small>
			</div>
		</div>
		<div class="con">
			<div class="imgcon1">
				<img src="vietnam.png">
			</div>
			<div class="body">
				<p>Vietnam</p>
				<small>Jumlah:
					<?= $brg['SUM(vietnam)']; ?>
				</small>
				<br><br>
				<small>Harga: IDR
					<?= $hrg['SUM(vietnam)*33.000']; ?>
				</small>
			</div>
		</div>
		<div class="con">
			<div class="imgcon1">
				<img src="arabica-mandailing.png">
			</div>
			<div class="body">
				<p>arabica mandailing</p>
				<small>Jumlah:
					<?= $brg['SUM(arabicamandailing)']; ?>
				</small>
				<br><br>
				<small>Harga: IDR
					<?= $hrg['SUM(arabicamandailing)*42.000']; ?>
				</small>
			</div>
		</div>
		<div class="con">
			<div class="imgcon1">
				<img src="arabica-bali.png">
			</div>
			<div class="body">
				<p>Arabica Bali</p>
				<small>Jumlah:
					<?= $brg['SUM(arabicabali)']; ?>
				</small>
				<br><br>
				<small>Harga: IDR
					<?= $hrg['SUM(arabicabali)*42.000']; ?>
				</small>
			</div>
		</div>
		<div class="con">
			<div class="imgcon1">
				<img src="excelsa-semendo.png">
			</div>
			<div class="body">
				<p>Excelsa Semendo</p>
				<small>Jumlah:
					<?= $brg['SUM(excelsa)']; ?>
				</small>
				<br><br>
				<small>Harga: IDR
					<?= $hrg['SUM(excelsa)*32.000']; ?>
				</small>
			</div>
		</div>
		<div class="con">
			<div class="imgcon1">
				<img src="exotic-blend.png">
			</div>
			<div class="body">
				<p>Exotic Blend</p>
				<small>Jumlah:
					<?= $brg['SUM(exoticblend)']; ?>
				</small>
				<br><br>
				<small>Harga: IDR
					<?= $hrg['SUM(exoticblend)*45.000']; ?>
				</small>
			</div>
		</div>
		</div>
		<div class="con1">
			<p>Total</p>
			<hr>
			<small>IDR <?= $total['total']; ?> </small>
			<div class="checkout">
				<a href="../checkout/checkout.html" target="blank"><span class="co-icon"><i class="fas fa-cash-register"></i></span></a>
		</div>
		</div>
		
				<?php endforeach; ?>
			<?php endforeach; ?>
		<?php endforeach; ?>
	</div>
	<script>
		let spinnerWrapper = document.querySelector('.loader-wrapper');
		var delay = 3000;

		window.addEventListener('load', function () {
			spinnerWrapper.style.display = 'none';
		});
	</script>
</body>
</body>
</html>