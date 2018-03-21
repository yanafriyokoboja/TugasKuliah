<?php
include'koneksi.php';
 
// $query = "select * from data";
$hasil  =mysqli_query($kon , "select * from mahasiswa");
if(mysqli_num_rows($hasil) > 0 ){
  $response = array();
  $response["data"] = array();
  while($data = mysqli_fetch_array($hasil))
  {
    $h['nim'] = $data["nim"];
    $h['nama'] = $data["nama"];
    $h['alamat'] = $data["alamat"];
	$h['progdi'] = $data["progdi"];
    array_push($response["data"], $h);
  }
   echo json_encode($response);
	}else {
	  $response["message"]="tidak ada data";
	  echo json_encode($response);
}
