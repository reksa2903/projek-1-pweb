<?php
    class BMIPasien
    {
    public $nama,
        $berat,
        $tinggi,
        $umur,
        $jk;

    public function hasilBMI()
    {
    return "<b>Nama : $this->nama <br></br>
            Berat Badan : $this->berat <br></br>
            Tinggi Badan : $this->tinggi <br></br>
            Umur : $this->umur <br></br>
            Jenis Kelamin : $this->jk </b>";
    }
    public function statusBMI($BMI)
    {
        if ($BMI < 18.5){
            return "<td>Kekurangan Berat Badan</td>";
        } elseif ($BMI >= 18.5 && $BMI <= 24.9) {
            return "<td>Ideal</td>";
        } elseif ($BMI >= 25.0 && $BMI <= 29.9) {
            return "<td>Kelebihan Berat Badan</td>";
        } else {
            return "<td>Obesitas</td>";
        }
    }
}

$pasien1 = ['nama' => 'Lewa', 'kelamin' => 'Laki-laki', 'umur' => 35, 'berat' =>75.0, 'tinggi' => 185];
$pasien2 = ['nama' => 'Robben', 'kelamin' => 'Laki-laki', 'umur' => 42, 'berat' =>60.0, 'tinggi' => 177];
$pasien3 = ['nama' => 'Lahm', 'kelamin' => 'Laki-laki', 'umur' => 48, 'berat' =>60.0, 'tinggi' => 165];


$ar_pasien = [$pasien1, $pasien2, $pasien3];

?>