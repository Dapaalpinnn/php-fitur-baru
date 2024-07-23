<?php 

/* 
    * Mixed V2
    * Di PHP 8, Tipe data Mixed diperbarui
    * Sekarang, tipe data Mixed adalah singkatan dari: 
    * array|bool|callable|int|float|null|object|resource|string
*/

function TestMixed(mixed $data) :mixed
{
    if (is_array($data)) {
        return ["array"];
    } elseif (is_string($data)) {
        return "String";
    } elseif (is_numeric($data)) {
        return 100;
    } else{
        return null;
    }
}

var_dump(TestMixed(100));
var_dump(TestMixed("Hello World!"));
var_dump(TestMixed([]));
var_dump(TestMixed(new SplStack()));

?>