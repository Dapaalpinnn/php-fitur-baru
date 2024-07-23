<?php 

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
class NotBlank{

}

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class Length
{
    public int $min;
    public int $max;
    public function __construct(int $min, int $max){
        $this->min = $min;
        $this->max = $max;
    }
}

class UserLoginRequest
{
    #[Length(min:6, max:10)]
    #[NotBlank]
    public string $username;

    #[Length(min:8, max:10)]
    #[NotBlank]
    public string $password;
}

// Membaca attribute via reflection
function validateLogin(object $object) :void{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        ValidateNotBlank($property, $object);
        ValidateLength($property, $object);
    }
}

function ValidateNotBlank(ReflectionProperty $property, object $object) :void{
    $attribute = $property->getAttributes(NotBlank::class);
    if(count($attribute) > 0)
        if(!$property->isInitialized($object))
            throw new Exception("Property $property->name is not initialized");
        if($property->getValue($object) == null)
            throw new Exception("Property $property->name is null");
}

function ValidateLength(ReflectionProperty $property, object $object) :void
{
    if(!$property->isInitialized($object) || $property->getValue($object) == null){
        return;
    }
    
    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach ($attributes as $attribute) 
    {
        $length = $attribute->newInstance();
        $valueLength = strlen($value);
        if($valueLength < $length->min)
            throw new Exception("Property $property->name is too short");
        if($valueLength > $length->max)
            throw new Exception("Property $property->name is too long");
    }
}

$request = new UserLoginRequest();
$request->username = "Lunary";
$request->password = "Admin#1234";

validateLogin($request);
echo "Succes" . PHP_EOL;






?>