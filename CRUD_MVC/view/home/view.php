<div style="padding-left: 20px; padding-right: 20px;">
<?php
    // echo "<div class = 'row'>";
    //   while ($row=$this->model->fetch($data)) { 
    //  echo "
    //    <div class ='col-sm-6 col-md-3'>
    //    <div class = 'thumbnail'>
    //    <img src = 'asset/img/$row[gambar_bunga]' width='304' height='236' alt = 'Generic placeholder thumbnail'></div>
    //     <div class = 'caption'>
    //     <h4>$row[nama_bunga]</h4>
    //     <p>Jenis bunga : $row[jenis_bunga]</p>
    //     <p>Harga bunga : $row[harga_bunga]</p>
    //     <a href = 'index.php?page=keranjang&kr=$row[id_bunga]' class ='btn btn-primary' role = 'button'> Beli Bunga</a>
    //    </div></div>";

    //}
   
?>
</div>

<?php  
            while ($row=$this->model->fetch($data)) 
            { 
                ?>  
                <div class="col-sm-6 col-md-3">  
                     <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="asset/img/<?php echo $row['gambar_bunga']; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["nama_bunga"]; ?></h4>  
                               <h4 class="text-danger">Rp. <?php echo $row["harga_bunga"]; ?>,-</h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="nama_bunga" value="<?php echo $row["nama_bunga"]; ?>" />
                               <input type="hidden" name="id" value="<?php echo $row['id_bunga']?>"/>
                                <input type="hidden" name="id">   
                               <input type="hidden" name="harga_bunga" value="<?php echo $row["harga_bunga"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>
                 <?php  
                     }  
                if (isset($_POST['add_to_cart'])) {
                  $main = new Controller();
                  $main->cart();
                }
                ?>
