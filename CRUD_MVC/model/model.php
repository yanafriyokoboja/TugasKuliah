<?php
	
	class model
	{	
	    function __construct() {
	        $this->mysqli  = new mysqli('localhost', 'root', '', 'bunga');
	    }
		function execute($query){
			return $this->mysqli->query($query);
		}
		
		function fetch($query){
		 return $query->fetch_assoc();
		}
		function selectAll($tabel){
			$query = "select * from $tabel";
			return $this->execute($query);
		}

		function selectdetail($tabel,$jenis,$nama){
			$query = "select * from $tabel where $jenis='$nama'";
			return $this->execute($query);
		}

		
		function delete($tabel,$pk,$id){
			$query = "delete from $tabel where $pk='$id'";
			return $this->execute($query);
		}
		function insert($tabel,$data){
			$koma='';
			$set='';
			foreach ($data as $d => $value) {
				$set .= $koma."'$value'";
				$koma = ',';
			}
			$query = "insert into $tabel values ($set)";
			return $this->execute($query);
		}
		function selectwhere($tabel,$pk,$id){
			$query = "select * from $tabel where $pk=$id";
			return $this->execute($query);
		}
		function update($tabel, $pk, $id, $data){
			$koma='';
			$set='';
			foreach ($data as $d => $value) {
				$set .= $koma.$d.'='."'$value'";
				$koma = ',';
			}
			$query = "update $tabel set $set where $pk='$id'";
			echo $query;
			return $this->execute($query);
		}
		function cart(){
			
		}

	}
?>
