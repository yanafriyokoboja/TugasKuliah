
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-8 col-sm-offset-2 text-left"> 
      <h1>Ubah Data Bunga</h1>
		<form action="" method="POST"  enctype="multipart/form-data">
			<table class="table table-condensed">
				<input type="hidden" name="id_bunga" value="<?=$row['id_bunga']?>">
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama_bunga" value="<?=$row['nama_bunga']?>" size="45" /></td>
				</tr>
				<tr align="center">
					<td>Jenis Bunga</td>
					<td>:</td>
					<td><input type="text" name="jenis_bunga" value="<?=$row['jenis_bunga']?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Jumlah Bunga</td>
					<td>:</td>
					<td><input type="text" name="jumlah_bunga" value="<?=$row['jumlah_bunga']?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Harga Bunga</td>
					<td>:</td>
					<td><input type="text" name="harga_bunga" value="<?=$row['harga_bunga']?>" size="45"/></td>
				</tr>
				
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
    </div>
  </div>
</div>
<?php
	if(isset($_POST['submit'])){
		$main = new controller();
		$main->update();
	}
?>






