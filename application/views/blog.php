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
      </tr>
      <?php 
        $no=1;
        foreach($query as $b){
      ?>
        <tr align="center">
          <td><?php echo $no++ ?></td>
          <td><?php echo $b->title; ?></td>
          <td><?php echo $b->content_artikel ?></td>
          
        </tr>   
        <?php 
      }
      ?>
    </table>
  </div>
	</body>
</html>