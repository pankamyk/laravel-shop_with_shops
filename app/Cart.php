<?php

namespace App;

class Cart
{
    public $items = null;
    public $price = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->price = $oldCart->price;
        }   
    }

    public function add($item, $id)
    {
        
    }
}
