<?php 

function test(string $test) :void
{
    if(trim($test) == ""){
        throw new Exception("Undefined String!");
    } else{
        echo $test . PHP_EOL;
    }
}

try {
    test("  Hello World!!!   ");
} catch (Exception) {
    echo "The Exception Defined!";
}

?>