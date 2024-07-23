<?php 

class Player{
    public function __construct(public string $username, public string $email, public string $password){
        echo "Username: $username ". PHP_EOL;
        echo "Email: $email". PHP_EOL;
        echo "Password: $password". PHP_EOL;
    }
}

$player = new Player(username: "Lynx", password: "Admin1234", email: "lynx@example.com");

?>