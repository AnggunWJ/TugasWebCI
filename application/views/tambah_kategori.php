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
<?php echo form_open("kategori/tambah", array('enctype'=>'multipart/form-data')); ?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	 <div class="form-group">
	 	<?php echo validation_errors(); ?>
	 		 	<label for="kategori">Kategori</label>
	 	<input type="text" id="kategori" name="kategori" class="form-control" placeholder="Masukkan Kategori">
	 	<label for="deskripsi">Deskripsi</label>
	 	<textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi"></textarea>

	 </div>
	 <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
	 </form></div>

 
<?php echo form_close(); ?>
</body>
</html>
