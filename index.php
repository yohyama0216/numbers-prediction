<?php

use Test\Numbers;
use Test\Loto\Loto;

require('vendor/autoload.php');

//$Converter = new Test\Converter('numbers3');
//$html = $Converter->generateResultSQL();

// $numbersPastData = new NumbersPastData(3);
// //$data = $numbersPastData->getData();
// $search = new Test\Search\Search($numbersPastData);
// $search->searchNumbersDigitPattern(10,2,'1digit');
// $search->displayResult();

$loto = new Loto(6, 100, '2020/09/01', '01 02 03 04 05 06 07', '11 22');


?>
<html>

<head></head>

<body>
    <main>
        test <?php  ?>
    </main>
</body>

</html>