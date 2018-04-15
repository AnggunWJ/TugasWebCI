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
<?php echo form_open("crud/tambah", array('enctype'=>'multipart/form-data')); ?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	 <div class="form-group">
	 	<?php echo validation_errors(); ?>
	 		 	<label for="title">Judul</label>
	 	<input type="text" id="judul" name="judul" class="form-control" placeholder="Masukkan Nama">
	 	<label for="konten">Konten</label>
	 	<textarea id="konten" name="konten" class="form-control" placeholder="Masukkan Konten"></textarea>
	 	<label for="tanggal">Tanggal </label>
	 	<input type="text" placeholder="yyyy-mm-dd" id="tanggal" name="tanggal" class="form-control">
	 	<label for="gambar">Gambar </label>
		<input type="file" name="input_gambar" class="form-control">
	 </div>
	 <button type="submit" class="btn btn-primary">SIMPAN</button>
	 </form></div>

 
<?php echo form_close(); ?>
</body>
</html>