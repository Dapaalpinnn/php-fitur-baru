<?php 

// NullSafe => Pengecekan apakah nilai null secara otomatis

class Address{
    public ?string $country;
    public ?string $city = "Surabaya";
}

class User{
    public ?Address $address;
}

// Without Nullsafe (Manual check null)
function getCity(?User $user)
{
    if($user != null){
        if($user->address != null){
            return $user->address->city;
        }
    }
}

// With Nullsafe
function getCountry(?User $user) :?string {
    return $user?->address?->country;
}

echo getCity(null);
echo getCountry(null) . PHP_EOL;

?>