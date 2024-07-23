<?php 

// Latihan 1 => Match Expression biasa
$value = "E";
$result = null;

$result = match ($value) {
    "A", "B", "C"  => "Anda Lulus!",
    "D", "E" => "Anda tidak lulus!",
    default => "Input nilai yang benar, input kamu: $value",
};

echo "Result: $result". PHP_EOL;

// Latihan 2 => Match Expression Non Equals
$value = 90;
$result = match(true){
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "Input nilai yang benar",
};

echo "Result match Expressions non equals: $result". PHP_EOL;

// Latihan 3 => Match Expression dengan pengecekan kondisi
$name = 'Thomas';
$result = match (true) {
    strlen($name) >= 15 => "Nama panggilan kamu terlalu panjang, sesuai petunjuk ya",
    strlen($name) <=5 => "Nama $name terlalu pendek", 
    default => "Selamat datang di GOJEK, $name"
};

echo $result; 


?>