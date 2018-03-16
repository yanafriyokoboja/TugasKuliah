<?php
include "koneksi.php";

$dataArray = array();

$result = $kon->query("SELECT *FROM mahasiswa");

while ($data =$result->fetch_array(MYSQLI_ASSOC)) {
	$dataArray []=array('nim'=>$data['nim'],'nama'=>$data['nama'],'alamat'=>$data['alamat'],'usia'=>$data['usia']);
}
// print_r($dataArray);
$doc = new DOMDocument();
$doc->formatOutput = true;

$root = $doc->createElement("mahasiswa");
$doc->appendChild($root);

foreach ($dataArray as $dataMahasiswa) {
	$dM = $doc->createElement('Data');

	$nim = $doc->createElement('nim'); 
	$textNim = $doc->createTextNode($dataMahasiswa['nim']);
	$nim->appendChild($textNim);
	$dM->appendChild($nim); 

	$nama = $doc->createElement('nama');
	$textNama = $doc->createTextNode($dataMahasiswa['nama']);
	$nama->appendChild($textNama);
	$dM->appendChild($nama); 

	$alamat = $doc->createElement('alamat');
	$textAlamat = $doc->createTextNode($dataMahasiswa['alamat']);
	$alamat->appendChild($textAlamat);
	$dM->appendChild($alamat); 

	$usia = $doc->createElement('usia');
	$textUsia = $doc->createTextNode($dataMahasiswa['usia']);
	$usia->appendChild($textUsia);
	$dM->appendChild($usia); 

	$root->appendChild($dM);
}
echo $doc->saveXML();
echo '<a href="mahasiswa.xml">Cek</a>';
$doc->save("mahasiswa.xml");
?>


<!-- </body>
</html> -->