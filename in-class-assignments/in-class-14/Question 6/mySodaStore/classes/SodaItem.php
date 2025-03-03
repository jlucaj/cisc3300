<?php

namespace mySodaStore\classes;

class SodaItem {
    private $name;
    private $quantity;
    private $price;

    public function __construct($name, $quantity, $price)
    {
        $this->name     = $name;
        $this->quantity = $quantity;
        $this->price    = $price;
    }

    // Method to return a JSON-encoded array of item data
    public function toJson()
    {
        $data = [
            'name'     => $this->name,
            'quantity' => $this->quantity,
            'price'    => $this->price
        ];

        return json_encode($data);
    }
}

