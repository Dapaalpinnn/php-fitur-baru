<?php 

/* 
    * Attribute 
    * menambahkan informasi metadata terstruktur dan mudah dibaca ke deklarasi dalam kode
    * https://www.php.net/manual/en/language.attribute.php
*/

// Membuat attribute 
#[Attribute]
class NotBlank { // Nama class menjadi nama attribute
    
}

class LoginRequest{
    // Melakukan validasi jika property terdapat atribut NotBlank, maka tidak boleh null atau belum didefinisikan 
    #[NotBlank] // Menambahkan metadata atau informasi tambahan berupa attribute dengan value class NotBlank
    public ?string $username;
    #[NotBlank]
    public ?string $password;
}

// Membaca attribute via reflection
function Validate(object $object) :void{
    $class = new reflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        ValidateNotBlank($property, $object);
    }
}

function ValidateNotBlank(ReflectionProperty $property, object $object){
    $attributes = $property->getAttributes(NotBlank::class); // Mengambil attribute NotBlank
    if(count($attributes) > 0){
        if(!$property->isInitialized($object))
            throw new Exception("Property $property->name is not initialized");
        if($property->getValue($object) == null)
            throw new Exception("Property $property->name is null");
    }
}

$request = new LoginRequest();
$request->username = "Lynx";
$request->password = "Rahasia";

validate($request);
echo "Succesfully Logged in"



?>