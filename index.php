<!DOCTYPE html>
<html>
<body>

<?php
$prova01=7;
$prova02=5;
$nota = ($prova01 + $prova02) / 2;

if (nota<3)
    $desempenho = "pessimo";
elseif($nota<5)
    $desempenho = "ruim";
elseif($nota<7)
    $desempenho = "medio";
elseif($nota<8)
    $desempenho = "bom";
else
    $desempenho = "excelente";
echo "seu desempenho foi $desempenho";

?>
 
</body>
</html>
