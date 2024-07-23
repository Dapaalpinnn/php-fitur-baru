<?php 


function test(mixed $mixed) :mixed
{
    if(is_array($mixed)) {
        return [1,2,3];
    }elseif(is_string($mixed)){
        return "Mixed String";
    }elseif(is_bool($mixed)){
        return true;
    }elseif(is_float($mixed)){
        return 3.14;
    } else {
        return null;
    }
}

var_dump(test([]));
var_dump(test("Test"));
var_dump(test(false));
var_dump(test(3.17));
var_dump(test(new DateTime()));




?>