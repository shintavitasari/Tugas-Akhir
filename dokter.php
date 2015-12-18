<?php
	require_once 'adodb/adodb.inc.php';
	class Dokter{
		function __construct()
		{
			$this->db = NewADOConnection('mysqli');
			$this->db->Connect('localhost','root','','rsakit');
		}

		function get_dokter() 
		{
			$pasien  = $this->db->Execute("SELECT * FROM dokter");
			return json_encode($dokter->GetAssoc());
		}

		function get_dokter_by_kodeDokter($kodeDokter){
			$dokter  = $this->db->Execute("SELECT * FROM dokter WHERE kodeDokter='$kodeDokter'");
			return json_encode($dokter->GetAssoc());
		}


		function tambah_dokter($kodeDokter, $namaDokter, $alamatDokter, $kotaDokter, $telpDokter){
			$sql = "insert into dokter(kodeDokter,namaDokter,alamatDokter,kotaDokter,telpDokter) values('$kodeDokter','$namaDokter','$alamatDokter','$kotaDokter','$telpDokter')";
			
			$insert = $this->db->Execute($sql);
			if($insert==true){
				$sukses = true;
				return $sukses;
			}else{
				$sukses = false;
				return $sukses;
			}
		}
		
	}
?>