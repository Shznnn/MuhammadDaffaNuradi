<?php
include "koneksi.php";
if (isset($_POST['kirim1'])) {
	$gayoarabica = $_POST['gayoarabica'];

	$simpan = "INSERT INTO penjualan(gayoarabica) VALUES('$gayoarabica')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");

}
if (isset($_POST['kirim2'])) {
	$gayorobusta = $_POST['gayorobusta'];

	$simpan = "INSERT INTO penjualan(gayorobusta) VALUES('$gayorobusta')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");
}
if (isset($_POST['kirim3'])) {
	$gayoluwak = $_POST['gayoluwak'];

	$simpan = "INSERT INTO penjualan(gayoluwak) VALUES('$gayoluwak')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");
}
if (isset($_POST['kirim4'])) {
	$jawarobusta = $_POST['jawarobusta'];

	$simpan = "INSERT INTO penjualan(jawarobusta) VALUES('$jawarobusta')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");
}
if (isset($_POST['kirim5'])) {
	$kopisusublend = $_POST['kopisusublend'];

	$simpan = "INSERT INTO penjualan(kopisusublend) VALUES('$kopisusublend')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");
}
if (isset($_POST['kirim6'])) {
	$robustatoraja = $_POST['robustatoraja'];

	$simpan = "INSERT INTO penjualan(robustatoraja) VALUES('$robustatoraja')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");
}
if (isset($_POST['kirim7'])) {
	$robustaflores = $_POST['robustaflores'];

	$simpan = "INSERT INTO penjualan(robustaflores) VALUES('$robustaflores')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");
}
if (isset($_POST['kirim8'])) {
	$vietnam = $_POST['vietnam'];

	$simpan = "INSERT INTO penjualan(vietnam) VALUES('$vietnam')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");
}
if (isset($_POST['kirim9'])) {
	$arabicamandailing = $_POST['arabicamandailing'];

	$simpan = "INSERT INTO penjualan(arabicamandailing) VALUES('$arabicamandailing')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");
}
if (isset($_POST['kirim10'])) {
	$arabicabali = $_POST['arabicabali'];

	$simpan = "INSERT INTO penjualan(arabicabali) VALUES('$arabicabali')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");
}
if (isset($_POST['kirim11'])) {
	$excelsa = $_POST['excelsa'];

	$simpan = "INSERT INTO penjualan(excelsa) VALUES('$excelsa')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");
}
if (isset($_POST['kirim12'])) {
	$exoticblend = $_POST['exoticblend'];

	$simpan = "INSERT INTO penjualan(exoticblend) VALUES('$exoticblend')";

	$result = mysqli_query($conn,$simpan);

	header("location:http://localhost/kopi/product/product.html");
}
?>