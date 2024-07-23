<?php 

function say(?string $message): void 
{
    $result = $message != null ? "Hi, $message": throw new Exception("Message must not be empty");
    echo $result . PHP_EOL;
}

say("Please enter a username and password");
say(null);

?>