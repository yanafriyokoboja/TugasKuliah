<?php
include "model/model.php";

class controller{
	var $view ="admin";
	var $nama_file ="admin";
	var $view_data ="view_data";
	var $tabel ="input_bunga";
	var $pk ="id_bunga";

	function __construct(){
			$this->model = new model(); 
		}


	function index(){
		    $data = $this->model->selectAll($this->tabel);
			include "view/$this->view/view.php";
	}
	function view_add(){
		    $data = $this->model->selectAll($this->tabel);
			include "view/$this->view/view_add.php"; 
	}
	function view_pembelian(){
			// include "view/$this->view/view.php"; 
	}

	
	function delete($id){
		$delete=$this->model->delete($this->tabel,$this->pk,$id);
		header("location:index.php?page=$this->nama_file");
	}
    function insert(){
    	$id_bunga =$_POST['id_bunga'];
  		$nama_bunga = $_POST['nama_bunga'];
  		$jenis_bunga = $_POST['jenis_bunga'];
  		$harga_bunga = $_POST['harga_bunga'];
  		$jumlah_bunga =$_POST['jumlah_bunga'];
  		$gambar_bunga = $_FILES['image']['name'];
  		$asal= $_FILES['image']['tmp_name'];
  		$tujuan ="asset/img/".$gambar_bunga;
  		move_uploaded_file($asal, $tujuan);
  		$data=array('id_bunga'=>$id_bunga,'nama_bunga'=>$nama_bunga,'jenis_bunga'=>$jenis_bunga,'harga_bunga'=>$harga_bunga,'jumlah_bunga'=>$jumlah_bunga,'gambar_bunga'=>$gambar_bunga);
  		$insert =$this->model->insert($this->tabel,$data);
  		
   	 }

   	 
    function viewEdit($id){
			$data = $this->model->selectwhere($this->tabel,$this->pk,$id);
			$row = $this->model->fetch($data);
			include "view/$this->view/view_edit.php";
	}
	function update(){
		$id_bunga =$_POST['id_bunga'];
  		$nama_bunga = $_POST['nama_bunga'];
  		$jenis_bunga = $_POST['jenis_bunga'];
  		$harga_bunga = $_POST['harga_bunga'];
  		$jumlah_bunga =$_POST['jumlah_bunga'];

  		$data=array('id_bunga'=>$id_bunga,'nama_bunga'=>$nama_bunga,'jenis_bunga'=>$jenis_bunga,'harga_bunga'=>$harga_bunga,'jumlah_bunga'=>$jumlah_bunga);
  		header("location:index.php?page=$this->nama_file");

		$update = $this->model->update($this->tabel, $this->pk, $id_bunga, $data);


		}
}

?>