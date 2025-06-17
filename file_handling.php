<?php

$file = 'user.txt';


if (file_exists($file)){
    $handle =fopen($file, 'r');
    $contents =fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else{
    $handle = fopen($file,'w');
    $contents = 'Ali' . PHP_EOL . 'Khan' . PHP_EOL .  "jaleed";
    fwrite($handle, $contents);
    fclose($handle);
}

?>