<?php
  error_reporting(E_ALL); 
  ini_set('display_error',1);

  require_once 'nusoap/lib/nusoap.php';
  require_once 'adodb/adodb.inc.php';
  require_once 'pasien.php';
  require_once 'dokter.php';
  $server = new nusoap_server();
  $server->configureWSDL('Service RumahSakit','urn:rumahSakit');
  $server->wsdl->schemaTargetNamespace = 'urn:rumahSakit';

  $server->register('get_pasien',
    array(
      'kodePasien' => 'xsd:string'),
      array(
        'return' => 'xsd:string'
      ),
      'urn:rumahSakit',
      'urn:rumahSakit#get_pasien',
      'rpc',
      'encoded',
      'mengambil semua data pasien'
  );

  $server->register('get_pasien_by_kodePasien',
    array(
      'kodePasien' => 'xsd:string'),
      array(
        'return' => 'xsd:string'
      ),
      'urn:kodePasien',
      'urn:rumahSakit#get_pasien_by_kodePasien',
      'rpc',
      'encoded',
      'mengambil data pasien berdasarkan kode pasien'
  );

  $server->register('hapus_pasien',
    array(
      'kodePasien' => 'xsd:string'),
      array(
        'return' => 'xsd:string'
      ),
      'urn:rumahSakit',
      'urn:rumahSakit#hapus_pasien',
      'rpc',
      'encoded',
      'menghapus data pasien'
  );

  $server->register('tambah_pasien',
    array('kodePasien' => 'xsd:string',
          'namaPasien' => 'xsd:string',
          'alamatPasien' => 'xsd:string',
          'kotaPasien' => 'xsd:string',
          'telpPasien' => 'xsd:string'
      ),
    array('return' => 'xsd:string'),
    'urn:rumahSakit',
    'urn:rumahSakit#tambah_pasien',
    'rpc',
    'encoded',
    'menambah data pasien'
  );

  $server->register('ubah_pasien',
    array(
          'kodePAwal' => 'xsd:string',
          'kodePasien' => 'xsd:string',
          'namaPasien' => 'xsd:string',
          'alamatPasien' => 'xsd:string',
          'kotaPasien' => 'xsd:string',
          'telpPasien' => 'xsd:string'
      ),
    array('return' => 'xsd:string'),
    'urn:rumahSakit',
    'urn:rumahSakit#ubah_pasien',
    'rpc',
    'encoded',
    'merubah data pasien'
  );

  $server->register('get_dokter',
    array(
      'kodeDokter' => 'xsd:string'),
      array(
        'return' => 'xsd:string'
      ),
      'urn:rumahSakit',
      'urn:rumahSakit#get_dokter',
      'rpc',
      'encoded',
      'mengambil semua data dokter'
  );

  $server->register('hapus_dokter',
    array(
      'kodeDokter' => 'xsd:string'),
      array(
        'return' => 'xsd:string'
      ),
      'urn:rumahSakit',
      'urn:rumahSakit#hapus_dokter',
      'rpc',
      'encoded',
      'menghapus data dokter'
  );

  $server->register('tambah_dokter',
    array('kodeDokter' => 'xsd:string',
          'namaDokter' => 'xsd:string',
          'alamatDokter' => 'xsd:string',
          'kotaDokter' => 'xsd:string',
          'telpDokter' => 'xsd:string'
      ),
    array('return' => 'xsd:string'),
    'urn:rumahSakit',
    'urn:rumahSakit#tambah_dokter',
    'rpc',
    'encoded',
    'menambah data dokter'
  );

  $server->register('ambilDataByKodeD',
    array(
      'kodeDokter' => 'xsd:string'),
      array(
        'return' => 'xsd:string'
      ),
      'urn:rumahSakit',
      'urn:rumahSakit#ambilDataByKodeD',
      'rpc',
      'encoded',
      'mengambil data dokter berdasarkan kode'
  );

  $server->register('ubah_dokter',
    array('kodeDAwal' => 'xsd:string',
          'kodeDokter' => 'xsd:string',
          'namaDokter' => 'xsd:string',
          'alamatDokter' => 'xsd:string',
          'kotaDokter' => 'xsd:string',
          'telpDokter' => 'xsd:string'
      ),
    array('return' => 'xsd:string'),
    'urn:rumahSakit',
    'urn:rumahSakit#ubah_dokter',
    'rpc',
    'encoded',
    'mengubah data dokter'
  );

  //function addDokter($);

  function get_dokter() {
    $dokter = new Dokter();
    return $dokter->get_dokter();
  }
  function tambah_dokter($kodeDokter,$namaDokter,$alamatDokter,$kotaDokter,$telpDokter){
    $dokter = new Dokter();
    return $dokter->tambah_dokter($kodeDokter, $namaDokter, $alamatDokter, $kotaDokter, $telpDokter);
  }
  function tambah_pasien($kodePasien, $namaPasien, $alamatPasien, $kotaPasien, $telpPasien){
    $pasien = new Pasien();
    return $pasien->tambah_pasien($kodePasien, $namaPasien, $alamatPasien, $kotaPasien, $telpPasien);
  }

  function get_pasien_by_kodePasien($kodePasien) {
    $pasien = new Pasien();
    return $pasien->get_pasien_by_kodePasien($kodePasien);
  }

  function get_pasien() {
    $pasien = new Pasien();
    return $pasien->get_pasien();
  }

  $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : ''; $server->service($HTTP_RAW_POST_DATA);
?>