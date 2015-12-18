<?php
	error_reporting(E_ALL);
	ini_set('display_error',1);

	require_once('nusoap/lib/nusoap.php');
	$url = 'http://localhost/datars/server.php?wsdl';
	$client = new nusoap_client($url, 'WSDL');

	$aksi =  isset($_GET["aksi"]) ? $_GET["aksi"] : '' ;
	
	if(isset($_GET["aksi"]) && $_GET["aksi"] == "tambahDataPasien"){
		$kodePasien = $_POST['kodePasien'];
		$namaPasien = $_POST['namaPasien'];
		$alamatPasien = $_POST['alamatPasien'];
		$kotaPasien = $_POST['kotaPasien'];
 		$telpPasien = $_POST['telpPasien'];
		$hasil = $client->call('tambah_pasien', array('kodePasien'=>$kodePasien,'namaPasien'=>$namaPasien,'alamatPasien'=>$alamatPasien,'kotaPasien'=>$kotaPasien,
														'telpPasien'=>$telpPasien));
		return $hasil;
	}
	
	$result = $client->call('get_pasien');	
	$data = json_decode($result);
	
	
	//echo 'Request';
	//echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
	//echo 'Response';
	//echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
	//echo 'Debug';
	//echo '<pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';
?>