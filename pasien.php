<?php
	require_once 'adodb/adodb.inc.php';
	class Pasien{
		function __construct()
		{
			$this->db = NewADOConnection('mysqli');
			$this->db->Connect('localhost','root','','rsakit');
		}

		function get_pasien() 
		{
			$pasien  = $this->db->Execute("SELECT * FROM pasien");
			return json_encode($pasien->GetAssoc());
		}

		function get_pasien_by_kodePasien($kodePasien){
			$pasien  = $this->db->Execute("SELECT * FROM pasien WHERE kodePasien='$kodePasien'");
			return json_encode($pasien->GetAssoc());
		}


		function tambah_pasien($kodePasien, $namaPasien, $alamatPasien, $kotaPasien, $telpPasien){
			$sql = "insert into pasien(kodePasien,namaPasien,alamatPasien,kotaPasien,telpPasien) values('$kodePasien','$namaPasien','$alamatPasien','$kotaPasien','$telpPasien')";
			
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