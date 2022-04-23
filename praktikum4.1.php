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
            <h1>Praktikum 4a</h1>
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
              <?php
class Persegipanjang {
    private $panjang;
    private $lebar;
    function __construct($p,$l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }
    function getLuas()
    {
        return $this->panjang * $this->lebar;
    }
    function getKeliling()
    {
        return 2 * ($this->panjang * $this->lebar);
    }
}
?>
              <?php
require_once "praktikum4.1.php";
$perpan1 = new Persegipanjang(10,5);
$perpan2 = new Persegipanjang(20,15);
echo "Luas Persegi Panjang I ".$perpan1->getLuas();
echo "<br>Luas Persegi Panjang II ".$perpan2->getLuas();
echo "<br>Keliling Persegi Panjang I ".$perpan1->getKeliling();
echo "<br>Keliling Persegi Panjang II ".$perpan2->getKeliling();
?>
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