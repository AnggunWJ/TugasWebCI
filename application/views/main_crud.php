<div class="container">
    <div class="col-md-12">
    <h3><span class="fa fa-plus"></span>  Data Artikel</h3>          
    <a style="margin-bottom:20px" href="<?php echo site_url(); ?>/crud/tambah" class="btn btn-info col-md-2 test"><span class="fa fa-plus"> Tambah Artikel</span></a>    
    <br/>
    <br/>
   </div> 

    <table class="table table-hover" >
      <tr align="center">
        <th class="col-md-0">Nomor</th>
        <th class="col-md-0">Judul</th>
        <th class="col-md-0">isi</th>
        <th class="col-md-0">Gambar</th>
        <th class="col-md-0">Tanggal</th>
        <th class="col-md-0">Pilihan</th>
      </tr>
      <?php 
        $no=1;
        foreach($query as $b){
      ?>
        <tr align="center">
          <td><?php echo $no++ ?></td>
          <td><?php echo $b->title; ?></td>
          <td><?php echo substr($b->content_artikel, 0, 20) . '...'; ?></td>
          <td><img style='width:100px;height:150px' src="<?php echo base_url().'assets/image/'?><?php echo $b->images; ?>"></td>
          <td><?php echo $b->tgl_posting; ?></td>
          <td>
            
            <a href="<?php echo site_url(); ?>crud/edit/<?php echo $b->id_blog;  ?>" class="btn btn-primary">
              <span class="fa fa-edit">  Edit</span>
            </a>
            <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='<?php echo site_url(); ?>crud/hapus/<?php echo $b->id_blog;  ?>' }" class="btn btn-danger">
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