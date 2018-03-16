<div style="padding-left: 20px; padding-right: 20px;">
<?php
    echo "<div class = 'row'>";
      while ($row=$this->model->fetch($data)) { 
     echo "
       <div class ='col-sm-6 col-md-3'>
       <div class = 'thumbnail'>
       <img src = 'asset/img/$row[gambar_bunga]' width='304' height='236' alt = 'Generic placeholder thumbnail'></div>
        <div class = 'caption'>
        <h4>$row[nama_bunga]</h4>
        <p>Jenis bunga : $row[jenis_bunga]</p>
        <p>Harga bunga : $row[harga_bunga]</p>
        <a href = '#' class ='btn btn-primary' role = 'button'> Beli Bunga</a>
       </div></div>";

    }
   
?>
</div>