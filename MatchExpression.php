<?php 

/* 
    * Match Expression => Mirip dengan switch case, namun lebih baik 
    * Match adalah expression, artinya dia bisa mengambalikan value 
    * Digunakan untuk switch case yang sederhana
*/

// Switch Case
$value = "F";
$result = null;

switch ($value) 
{
    case 'A':
    case 'B':
    case 'C':
        $result = "Anda lulus";
        break;
    case 'D':
        $result = "Anda tidak lulus";
        break;
    default:
        $result = "Silahkan input value yang benar!";
        break;
}

echo "Switch Case: $result". PHP_EOL;


// Match Expressions
$value = "E";
$result = match ($value) 
{
    "A","B","C" => "Anda Lulus", 
    "D" => "Anda tidak lulus", 
    "E" => "Try Again",
    default => "Silahkan input value yang valid, input kamu: $value"
};

echo "Match Expressions: $result". PHP_EOL;


// Match expression non equals => melakukan pengecekan kondisi (Selama bernilai boolean)

// Contoh 1
$value = 90;
$result = match(true)
{
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "Kamu tidak lolos!"
};

echo "Match Expressions non equals: $result" . PHP_EOL;


// Contoh 2
$name = "Mrs.Lunar";
$result = match (true) {
     str_contains($name, "Mrs.") => "Hello Mam",
     str_contains($name, "Mr.") => "Hello sir",
     default => "Hello $name"
};

echo "Match: $result". PHP_EOL;

?>