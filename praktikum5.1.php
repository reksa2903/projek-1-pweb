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
            <h1>Praktikum 5a</h1>
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
              <div class="card-header">
                <div class="card-tools">
                </div>
              </div>
              <div class="card-body">
              <?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const volumeGelas = 250 . " ML";
    public $namaMinuman;

    public function set_volume($v){
        return $this->volume = $v;
    }
    public function set_hargaSegelas($hs){
        return $this->hargaSegelas = $hs;
    }
    public function pengurangan($vol){
        // $this->volume = $vol - self::volumeGelas;
        echo "Hasil volume bernilai" ." ". $this->volume . " ML";
    }
}

$air = new Dispenser();
echo $air -> namaMinuman = "<p style='text-align:center;'>  Minuman Teh pucuk <p/>";
echo "<hr>";
echo $air -> set_volume("Volumenya adalah 500 ML");
echo "<br>";
echo $air -> set_hargaSegelas("Harga segelasnya adalah Rp.". number_format("7000",0,".","."));
echo "<br>";
echo "Reksa membeli Teh 1 pcs yang bervolume ". Dispenser::volumeGelas;
echo "<br>";
$air->pengurangan(1000);
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