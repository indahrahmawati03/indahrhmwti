<?php

require_once ('./luaslingkaran.php');

use App\math\luaslingkaran;

$lingkaran = new luasLingkaran();
// $lingkaran->jari = 10;
$lingkaran->tampil('roda');// panggil method

luasLingkaran::testing();// panggil static method