<?php 
	require('koneksi.php');

	$no_online = $_POST['no_online'];
	$pertanyaan1 = $_POST['pertanyaan1'];
	$pertanyaan2 = $_POST['pertanyaan2'];
	$pertanyaan3 = $_POST['pertanyaan3'];
	$pertanyaan4 = $_POST['pertanyaan4'];
	$pertanyaan5 = $_POST['pertanyaan5'];
	$solusi = $_POST['solusi'];
	$bintang = $_POST['bintang'];

	$sql = mysqli_query($conn, "INSERT INTO aduan (no_online, pertanyaan1, pertanyaan2, pertanyaan3, pertanyaan4, pertanyaan5, solusi, status, bintang) VALUES('$no_online','$pertanyaan1', '$pertanyaan2', '$pertanyaan3', '$pertanyaan4', '$pertanyaan5', '$solusi', 'PENGAJUAN ADUAN', '$bintang')");

	if($sql){
		echo json_encode(array('response'=>'success'));
	}else
	{
		echo json_encode(array('response'=>'fail', 'report_fail'=>mysqli_error($conn)));
	}

 ?>