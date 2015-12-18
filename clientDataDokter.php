<?php
	error_reporting(E_ALL);
	ini_set('display_error',1);

	require_once('nusoap/lib/nusoap.php');
	$url = 'http://localhost/datars/server.php?wsdl';
	$client = new nusoap_client($url, 'WSDL');

	$aksi =  isset($_GET["aksi"]) ? $_GET["aksi"] : '' ;
	
	if(isset($_GET["aksi"]) && $_GET["aksi"] == "tambahDataDokter"){
		$kodeDokter = $_POST['kodeDokter'];
		$namaDokter = $_POST['namaDokter'];
		$alamatDokter = $_POST['alamatDokter'];
		$kotaDokter = $_POST['kotaDokter'];
 		$telpDokter = $_POST['telpDokter'];
		$hasil = $client->call('tambah_dokter', array('kodeDokter'=>$kodeDokter,'namaDokter'=>$namaDokter,'alamatDokter'=>$alamatDokter,'kotaDokter'=>$kotaDokter,'telpDokter'=>$telpDokter));
		return $hasil;
	}
	
	$result = $client->call('get_dokter');	
	$data = json_decode($result);
	
	
	//echo 'Request';
	//echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
	//echo 'Response';
	//echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
	//echo 'Debug';
	//echo '<pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';
?>