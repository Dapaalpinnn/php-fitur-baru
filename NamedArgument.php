<?php 

/*
    * Named Argument 
    * Memasukkan argument atau parameter tanpa harus sesuai dengan posisinya 
    * Menjadikan kode program mudah dibaca ketika memanggil function yang memiliki argument sangat banyak
*/

function sample(string $first, string $second, string $third) :void{
    echo "Named Argument: $first $second $third" . PHP_EOL;
}

// Without named argument
sample("First", "Second", "Third");
// With named argument
sample(third: "Third", first: "First", second: "Second");

?>