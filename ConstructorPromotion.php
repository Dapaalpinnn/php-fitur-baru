<?php 

/*
    * Constructor Property Promotion (CPP)
    * Membuat otomatis properties pada constructor 
*/

class Product{
    public function __construct(
    public string $id, 
    public string $name, 
    public int $price, 
    public int $quantity = 0)
    {
        echo "ID Product: $id" . PHP_EOL;
        echo "Name: $name" . PHP_EOL;
        echo "Price: $price" . PHP_EOL;
        echo "Quantity: $quantity" . PHP_EOL;
    }
}

$produk = new Product(id: "142349D9", name: "iPhone", price: 15_000_000, quantity: 100);    

?>