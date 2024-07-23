<?php 

/* 
    * Union Types 
    * Menambahkan lebih dari satu tipe data ke Property, Argument, Parameter, atau Return Value

*/
class UnionType{
    public string|int|bool|array $data;
}

$unionType = new UnionType();
$unionType->data = [["Senin, Selasa, Rabu"], ["Januari, Februari"]];
$unionType->data = "String";
$unionType->data = true;
$unionType->data = 100;
var_dump($unionType);

function sample(string|int $data) :string|array|int{
    if(is_string($data)){
        return "Tipe data String";
    } else if(is_integer($data)){
        return "Tipe data Integer";
    }
}

echo (sample("String")) . PHP_EOL;
echo (sample(10)) . PHP_EOL;

?>