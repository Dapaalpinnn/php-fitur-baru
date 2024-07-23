<?php 

/* 
    * Non Capturing Catches 
    * DI PHP 8, Kita tidak wajib membuat variable exception jika memang tidak akan menggunakannya
*/

function Validate(string $value)
{
    if(trim($value) == ""){
        throw new Exception("String Kosong!");
    }
}

try {
    Validate(" ");
} catch (Exception) { // Tidak memerlukan variable exception
    echo "Invalid string defined!" . PHP_EOL;
}

?>