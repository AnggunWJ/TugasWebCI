<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dt/datatables.min.css"/>

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
        <th class="col-md-0">Kategori</th>
      </tr>
      <?php 
        $no=1;
        foreach($query as $b){
      ?>
        <tr align="center">
          <td><?php echo $no++ ?></td>
          <td><?php echo $b->title; ?></td>
          <td><?php echo $b->content_artikel ?></td>
           <td><?php echo $b->kategori ?></td>
        </tr>   
        <?php 
        echo $this->pagination->create_links();
      }
      ?>
    </table>
  </div>
      <!-- DataTables -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dt/datatables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
    <script type="text/javascript">
        $(document).ready( function () {
                $('#myTable').DataTable({
                    "bInfo" : false
                });
            } );
    </script>

	</body>
</html>