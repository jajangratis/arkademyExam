<?php
for ($i=0; $i <= 300 ; $i++) { 
    $s1 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 3)), 0, 4);
    $s2 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 3)), 0, 4);
    $s3 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 3)), 0, 4);
    $s4 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 3)), 0, 4);
    echo $s1."-".$s2."-".$s3."-".$s4."<br>";
}

// substr (stringnya,mulai,panjangnya)
//str_shuffle( untuk menshuffle)
//str_repeat (string,jumlah pengulangan)
//str trapt
?>