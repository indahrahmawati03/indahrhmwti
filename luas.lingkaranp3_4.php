// pertemuan 3 dan 4
<?php

class luasLingkaran {

      public const phi = 3.14;
      public int $jari;
      public function __construct($isijari = 1) {
        $this->jari = $isijari;
      }

      public function tampil($nama=  'roda') {
        $rumus = luasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} ini hasilnya adalah: $rumus";
      }

      public static function testing() {
        echo "<br/>";
        echo "Ini testing static ";
      }

      public function __destruct() {
        echo "udah ah cape";
      }
}

$lingkaran = new luasLingkaran();
$lingkaran->jari = 10;
$lingkaran->tampil('roda');// panggil method

luasLingkaran::testing();// panggil static method