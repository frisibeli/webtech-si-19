<?php

$array1 = [1, 2, 3, 45, 64, 346];

for ($i=0; $i < count($array1); $i++) { 
    echo $array1[$i];
    echo "<br/>";
}
$k=0;
while ($k < count($array1)) {
    echo $array1[$k++];
    echo "<br/>";
}

$array2 = [
    'var1' => 'Value 1',
    'var2' => 'Value 2'
];
foreach ($array2 as $key =>$value) {
    echo "$key => $value";
    echo "<br/>";
}
?>