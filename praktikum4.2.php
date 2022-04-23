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
            <h1>Praktikum 4b</h1>
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
<form action="praktikum4.2.php" method="POST">
  <div class="conten-wrapper">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Pilih MK</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="ddp">Dasar Dasar Pemrograman</option>
        <option value="Basdat">Basis Data</option>
        <option value="Pweb">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </div>
</form>

<?php

// Buat class
class NilaiMahasiswa{
    // Buat Properti
    public $nim;
    public $matkul;
    public $nilai;

    // Buat Method Construct
    function __construct($nim, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    function hitungNilai(){
        return $this->nilai;
    }

    // Buat Method Grade
    function grade($keterangan){
        if ($keterangan > 55) {
            return "Anda Lulus";
        }else {
            return "Anda Tidak Lulus";
        }
    }

    // Buat Method Predikat
    function predikat($keterangan){
        if ($keterangan >= 85 && $keterangan <=100) {
            return "A";
        }elseif ($keterangan >= 70 && $keterangan <=84) {
            return "B";
        }elseif ($keterangan >= 56 && $keterangan <=69) {
            return "C";
        }elseif ($keterangan >= 36 && $keterangan <=55) {
            return "D";
        }elseif ($keterangan >= 0 && $keterangan <=35) {
            return "E";
        }else{
            return "I";
        }
    }
}

?>

<?php
require_once 'praktikum4.2.php';
if($_POST){
    $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'],$_POST['nilai'], );
    $keterangan = $ns->hitungNilai();
    $hasil1 = $ns->grade($keterangan);
    $hasil2 = $ns->predikat($keterangan);
    echo "Nama : " .$ns->nim;
    echo "<br>";
    echo "MatKul : " .$ns->matkul;
    echo "<br>";
    echo "NIlai : " .$ns->nilai;
    echo "<br>";
    echo "Status : " .$hasil1;
    echo "<br>";
    echo "Grade : " . $hasil2;
}
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