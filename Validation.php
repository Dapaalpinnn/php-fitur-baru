<?php 

// Validation untuk Function Overriding

// Example 1: Merubah tipe data parameter dan return value
trait SampleTrait{
    public abstract function sampleFunction(string $data):string;
}

class sampleClass{
    use SampleTrait;
    public function sampleFunction(int $data): void{
        echo "Sample function Error: $data";   
    }
}

$sample = new sampleClass();
$sample->sampleFunction("Hai"); // Error Code


// Example 2: Merubah tipe data parameter 
class ExampleMethod
{
    public function method(array $a){

    }
}

class ChildExampleMethod extends ExampleMethod
{
    public function method(int $a)
    {
        // Error Code
    }
}

/* 
    * Private Function Overriding  
    * Di PHP 8, Sekarang private function tidak ada hubungannya lagi dengan child classnya
    * Sehingga kita bebas membuat function dengan nama yang sama 
    * Walaupun di parent ada function private dengan nama yang sama
*/

class Manager
{
    private function test(string $name) :void
    {

    }
}

class VicePresident extends Manager
{
    public function test(string $name, string $position) :string
    {
        return "Hello VP $name";
    }
}

?>