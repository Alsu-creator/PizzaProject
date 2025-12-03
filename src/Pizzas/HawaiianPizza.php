<?php

declare(strict_types=1);

namespace PizzaProject\Pizzas;

use PizzaProject\Pizza;

class HawaiianPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Гавайская';
        $this->sauce = 'Сырный';
        $this->toppings = ['Сыр Моцарелла', 'Ветчина', 'Ананасы'];
    }
}
