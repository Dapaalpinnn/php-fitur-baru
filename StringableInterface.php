<?php 

/* 
    * Jika kita melakukan override Magic Function __toString 
    * Maka class kita secara otomatis akan implement interface stringable 
    * Tipe Data Parameter Stringable hanya mempunyai 1 function: __toString()
*/

function say(Stringable $stringable)
{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

class Person
{
    public function __toString(): string{
        return "Person";
    }
}

say(new Person());

?>