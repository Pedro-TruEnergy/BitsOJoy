<?php

# this is the new branch
print_r($argv);
$temp=array_shift($argv);

print_r($argv);
echo count($argv);
foreach($argv as $arg){
    echo $arg;
}