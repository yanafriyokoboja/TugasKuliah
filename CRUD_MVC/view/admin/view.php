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
<div class="container" style="margin-right:15px; ">
  <h3>Data Bunga</h3>           
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Bunga</th>
        <th>Jenis Bunga</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Gambar</th>
     
      </tr>
    </thead>

<tbody>
		<?php

			 while($row = $this->model->fetch($data)){
				echo "
					<tr>
						<td>$row[nama_bunga]</td>
						<td>$row[jenis_bunga]</td>
						<td>$row[harga_bunga]</td>
						<td>$row[jumlah_bunga]</td>
            <td>$row[gambar_bunga]</td>
						<td><a href='index.php?page=$this->nama_file&e=$row[id_bunga]'  class ='btn btn-primary' role ='button'>Edit</a> 
						<a href='index.php?page=$this->nama_file&d=$row[id_bunga]'  class ='btn btn-default' role ='button' onClick=\"return confirm('Hapus Data?')\"\>Delete</a></td>
					</tr>
				";

				
			}
?>
			</tbody>
  </table>
</div>