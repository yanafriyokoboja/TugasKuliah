<div style="padding: 30px;">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="index.php?page=admin">Data Bunga</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="index.php?page=<?=$this->nama_file?>&ib=input">Input Bunga</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?page=<?=$this->nama_file?>&pm=pembelian">Data Pembelian</a>
  </li>
</ul></div>
<div class="container">
  <h3>Inputan Bunga</h3>
<form action="" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_bunga">

    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-grain"></i></span>
        <input id="nama_bunga" type="text" class="form-control" name="nama_bunga" placeholder="nama bunga.. ">
    </div><p></p>

    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-leaf"></i></span>
        <select class="form-control form-control-lg" name="jenis_bunga" id="jenis_bunga">
          <option value=""></option>
        <?php
          $jenisBunga = array("Anggrek","Mawar","Melati","Lily");
          foreach ($jenisBunga as $value) {
            echo "<option value=\"$value\">$value</option>";
          }echo '</select>';
          ?>
      </div><p></p>

    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
        <input id="harga_bunga" type="text" class="form-control" name="harga_bunga" placeholder="harga bunga.. ">
    </div><p></p>

    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
        <input id="jumlah_bunga" type="text" class="form-control" name="jumlah_bunga" placeholder="jumlah bunga.. ">
    </div><p></p>

  <input type="file" name="image"><p></p>

  <div class="form-group">        
      <div class="">
        <button type="submit" name="submit" class="btn btn-primary btn-block" style="width: 100%;">Simpan</button>
      </div>
    </div>
  
</form>
</div>  

<?php
	if(isset($_POST['submit'])){
		$main = new controller();
		$main->insert();
	}
?>
