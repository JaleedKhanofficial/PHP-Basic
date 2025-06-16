<?php
    echo"Strings <br>";
    $str = "My name is Jaleed khan...";
    echo strtolower($str) . "<br>";
    echo strtoupper($str) . "<br>";
    echo str_replace("My", "Hi my", $str). "<br>";
    echo str_word_count($str). "<br>";
    ?>