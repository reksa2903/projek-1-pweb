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
            <h1>Praktikum 5b</h1>
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
class Buah{
    //buat property
    public $name;
    protected $color;
    private $berat;

    //buat method untuk mencetak si color dan berat.
    public function set_color($c){
        return $this->color = $c;
    }
    public function set_berat($b){
        return $this->berat = $b;
    }
}
//cetak object
$mangga = new Buah();
echo $mangga->name = 'Mangga';
echo"<br>";
echo $mangga->set_color('hijau');
echo"<br>";
echo $mangga->set_berat(20).'kg';
?>
<?php
class Fruit{
    public $name;
    public $warna;

    public function __construct($name, $warna){
        $this->name = $name;
        $this->warna = $warna;
    }
    public function intro(){
        echo "<br>Nama aku adalah {$this->name} dan warna aku adalah {$this->warna}";
    }
}
class Strawberry extends Fruit{ //extends adalah keyword untuk inherite atau memasukkan class turunan dari class seblumnya.
    public function pesan(){
        echo "Aku adalah rambutan atau mangga?";
    }
}
$buah = new Strawberry('rambutan','merah');
$buah->pesan();
$buah->intro();
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