<div class="container">
    <div class="col-md-12">
    <h3><span class="fa fa-plus"></span>  Daftar Kategori</h3>          
    <a style="margin-bottom:20px" href="<?php echo site_url(); ?>/kategori/tambah" class="btn btn-info col-md-2 test"><span class="fa fa-plus"> Tambah Katerogi</span></a>    
    <br/>
    <br/>
   </div> 

    <table class="table table-hover" >
      <tr align="center">
        <th class="col-md-0">Nomor</th>
        <th class="col-md-0">Kategori</th>
        <th class="col-md-0">Deskripsi</th>
        <th class="col-md-0">Pilihan</th>
      </tr>
      <?php 
        $no=1;
        foreach($query as $b){
      ?>
        <tr align="">
          <td><?php echo $no++; ?></td>
          <td><?php echo $b->kategori; ?></td>
          <td><?php echo $b->deskripsi; ?></td>
          <td>
            <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='<?php echo site_url(); ?>kategori/hapus/<?php echo $b->id_kategori;  ?>' }" class="btn btn-danger">
              <span class="fa fa-trash">  Hapus</span>
            </a>
          </td>
        </tr>   
        <?php 
      }
      ?>
    </table>
  </div>
	</body>
</html>