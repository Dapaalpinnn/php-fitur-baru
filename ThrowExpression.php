<?php 

// Without Throw Expression 
function say(?string $name)
{
    if($name == null){
        throw new Exception("Tidak boleh null");
    }
    echo "Hello $name";
}

// With Throw Expression 
function sayExpression(?string $name){
    $result = $name != null ? "Hello $name": throw new Exception("Tidak boleh null!!");
    echo $result . PHP_EOL;
}

sayExpression("John Smith");
sayExpression(null);

?>