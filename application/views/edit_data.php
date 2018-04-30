<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/kustom.css'; ?>">
    <link href="<?php echo base_url(). 'assets/font-awesome/css/font-awesome.min.css'; ?>" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
</head>
<body>
  <br><br><br>
<?php echo form_open("", array('enctype'=>'multipart/form-data')); ?>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <div class="form-group">
    <?php echo validation_errors(); ?>
    <?php foreach ($detail->result() as $row) {?>
        <label for="title">Judul</label>
    <input type="text" id="judul" name="judul" value="<?php echo $row->title; ?>" class="form-control" placeholder="Masukkan Nama">
    <label for="konten">Konten</label>
    <textarea id="konten" name="konten" class="form-control" placeholder="Masukkan Konten"><?php echo $row->content_artikel; ?></textarea>
    <label for="tanggal">Tanggal </label>
    <input type="text" placeholder="yyyy-mm-dd" value="<?php echo $row->tgl_posting; ?>" id="tanggal" name="tanggal" class="form-control">
    <label for="gambar">Gambar </label>
    <input type="file" name="input_gambar" class="form-control"><input type="checkbox" name="ganti" value="y"> Ganti Gambar
    <label for="Sumber">Sumber</label>
    <input type="text" id="sumber" name="sumber" class="form-control" value="<?php echo $row->Sumber_artikel; ?>" placeholder="Masukkan Sumber">
    <label for="Jenis">Jenis</label>
    <input type="text" id="jenis" name="jenis" class="form-control" value="<?php echo $row->Jenis_Artikel; ?>" placeholder="Masukkan Jenis">
    <label for="Pengarang">Pengarang</label>
    <input type="text" id="pengarang" name="pengarang" class="form-control" value="<?php echo $row->Pengarang_Artikel; ?>" placeholder="Masukkan Pengarang">
    <label for="Kategori">Kategori</label>
    <select class="form-control" name="kategori">
                <option  value="">---Select Category---</option>                    
            <?php foreach($kategori->result() as $row) { ?>
                <option value="<?php echo $row->id_kategori;?>"><?php echo $row->kategori;?></option>
            <?php } ?>
        </select>    
   </div>
   <?php } ?>
   <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
   </form></div>

 
<?php echo form_close(); ?>
</body>
</html>