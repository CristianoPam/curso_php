<?php 


$arr=[];


for ($i=10; $i <= 20; $i++) {
    array_push($arr,$i);
}

print_r($arr);
echo "<br>";

$x=0;
while ($x < count($arr)) {
    
    if ($arr[$x] % 2==1) {
        echo "O valor $arr[$x] é impar<br>";
        
    }

$x++;
}


