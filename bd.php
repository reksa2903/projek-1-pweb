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
            <h1>Praktikum 2b</h1>
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
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h1>Form Nilai Siswa</h1>
<hr size="12">
<form action="bd.php"method="POST">
  <div class="form-group row">
    <label for="Nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="Nama" name="Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="Matkul" name="Matkul" class="custom-select">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="BD1">Basis Data 1</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_Uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-4">
      <input id="Nilai_Uts" name="Nilai_Uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_Uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-4">
      <input id="Nilai_Uas" name="Nilai_Uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_Tugas" class="col-4 col-form-label">Nilai Tugas / Praktkum</label> 
    <div class="col-4">
      <input id="Nilai_Tugas" name="Nilai_Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="Proses"/>
    </div>
  </div>
</form>
<!-- Kode PHP -->
<?php
// Menangkap Data User
$Proses = $_POST["Proses"];
$Nama = $_POST["Nama"];
$MatKul = $_POST["Matkul"];
$Nilai_Uts = $_POST["Nilai_Uts"];
$Nilai_Uas = $_POST["Nilai_Uas"];
$Nilai_Tugas = $_POST["Nilai_Tugas"];
$nilai_akuts = $Nilai_Uts * 0.3;
$nilai_akuas = $Nilai_Uas * 0.35;
$nilai_aktgs = $Nilai_Tugas * 0.3;
$nilai_akhir = $nilai_akuts + $nilai_akuas + $nilai_aktgs;

// Buat If
if($nilai_akhir >=85 && $nilai_akhir <=100){
    $hasil = "A";
    $hslak = "Lulus";
}elseif($nilai_akhir >=70 && $nilai_akhir <=84){
    $hasil = "B";
    $hslak = "Lulus";
}elseif($nilai_akhir >=56 && $nilai_akhir <=69){
    $hasil = "C";
    $hslak = "Lulus";
}elseif($nilai_akhir >=36 && $nilai_akhir <=55){
    $hasil = "D";
    $hslak = "Tidak Lulus";
}elseif($nilai_akhir >=0 && $nilai_akhir <=35){
    $hasil = "E";
    $hslak = "Tidak Lulus";
}else{
    $hasil = "I";
    $hslak = "Tidak lulus";
}

// Buat switch
switch ($nilai_akhir) {
  case $nilai_akhir >= 85 && $nilai_akhir <= 100:
      $nilan ="Sangat Memuaskan";
      break;
  case $nilai_akhir >= 70 && $nilai_akhir <= 84:
      $nilan ="Memuaskan";
      break;
  case $nilai_akhir >= 56 && $nilai_akhir <= 69:
      $nilan ="Cukup";
      break;
  case $nilai_akhir >= 36 && $nilai_akhir <= 55:
      $nilan ="Kurang";
      break;
  case $nilai_akhir >= 0 && $nilai_akhir <= 35:
      $nilan ="Sangat Kurang";
      break;                    
  default:
    $nilan ="Tidak Ada";
      break;
}

echo 'Nama :'.$Nama;
echo '<br/>Mata Kuliah:'.$MatKul;
echo '<br/>Nilai UTS :'.$Nilai_Uts;
echo '<br/>Nilai UAS :'.$Nilai_Uas;
echo '<br/>Nilai Tugas :'.$Nilai_Tugas;
echo '<br/>Grade :'.$hasil;
echo '<br/>Anda Dinyatakan :'.$hslak;
echo '<br/>Predikat Anda :'.$nilan;

?>
</body>
</html>
            </div>
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php
include_once 'footer.php';
?>