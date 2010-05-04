<?php
	function ekstensi($path) {
		$tmp = explode(".", $path);
		return $tmp[count($tmp)-1];
	}

	function nama($path) {
		$tmp = explode("/", $path);
		$tmp[count($tmp)-1] = explode(".", $tmp[count($tmp)-1])[0];
		$r = "";
		for ($x=0; $x<count($tmp); $x++) {
			if ($x!=count($tmp)-1) $r = $r.$tmp[$x]."/";
			else $r = $r.$tmp[$x];
		}
		return $r;
	}
	
	function tampilan_awal() { 
		echo '<html><head><link rel="icon" href="/gambar/favicon.ico"><style>body,html{height:100%;margin:0;}.bg{background-image:url("gambar/latar-belakang-default/latar-belakang.jpg");height:100%;background-position:center;background-repeat:no-repeat;background-size:cover;}</style></head><body><div class="bg"></div></body></html>';
	}
	
	function reqID($url) {
		return md5($url);
	}
	
	function hostID($url) {
		return base64_encode(md5($url));
	}

	@$file = '../files/'.$_GET['file'];
	$file = nama($file).".".ekstensi($file);

	header('X-Powered-By: amirSYR');
	header('Content-Type: text/plain');

	if (file_exists($file)) {
		readfile($file);
	} else if ($file=="../files/./files/") {
		header('Content-Type: text/html');
		tampilan_awal();
	} else {
		$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		header('Content-Type: text/xml');
		//echo 'Permintaan tidak valid';
		echo '<?xml version="1.0" encoding="UTF-8"?><Kesalahan><Kode>AksesDitolak</Kode><Pesan>Akses Ditolak</Pesan><IdPermintaan>'.reqID($url).'</IdPermintaan><IdHalamanUtama>'.hostID($url).'</IdHalamanUtama></Kesalahan>';
	}
?>