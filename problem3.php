<?php

echo "original code\n";
$arr = array('foo', 'bar', 'baz');
$i = 0;
while($i < count($arr)) {
    echo $arr[$i];
    $i++;
}

echo "\n\n\n";

echo "my code\n";

echo implode("", $arr);
echo "\n";

