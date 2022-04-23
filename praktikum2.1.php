<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 2a</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<h1>Belanja Online</h1>
<hr size="12">
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
        <form action="praktikum2.1.php" method="POST">
  <div class="form-group row">
    <label for="Customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="Customer" name="Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk_0" type="radio" class="custom-control-input" value="Tv"> 
        <label for="Produk_0" class="custom-control-label">Tv</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="Produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="Produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="Jumlah" name="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" class="btn btn-success" name="kirim">
    </div>
  </div>
</form>
		</div>
		<div class="col-md-4">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
				<div class="list-group-item">
					TV : 4.200.000
				</div>
				<div class="list-group-item">
					<p class="list-group-item-heading">
						Kulkas : 3.100.000
					</p>
				</div>
				<div class="list-group-item justify-content-between">
					Mesin Cuci : 3.800.000 
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga Dapat Berubah Setiap Saat</a>
			</div>
		</div>
	</div>
</div>
<?php
$kirim = $_POST["kirim"];
$Customer = $_POST["Customer"];
$Produk = $_POST["Produk"];
$Jumlah = $_POST["Jumlah"];

if($Produk=="Tv") {
  $hargatv = 4200000;
  $total = $hargatv * $Jumlah;
}elseif ($Produk=="Kulkas") {
  $hargakulkas = 3100000;
  $total = $hargakulkas * $Jumlah;
}elseif ($Produk=="Mesin Cuci") {
  $hargamesincuci = 3800000;
  $total = $hargamesincuci * $Jumlah; 
}else {
  $total = 0;
}

echo 'Nama Customer :'.$Customer;
echo '<br/>Produk Pilihan:'.$Produk;
echo '<br/>Jumlah Beli :'.$Jumlah;
echo '<br/>Total Harga :'.$total;
?>
</body>
</html>
  
    </section>
    <!-- /.content -->
  </div>
<?php
include_once 'footer.php';
?>