<?php

declare(strict_types=1);

namespace PizzaProject\Pizzas;

use PizzaProject\Pizza;

class MargheritaPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Маргарита';
        $this->sauce = 'Томатный';
        $this->toppings = ['Сыр Моцарелла', 'Свежие листья базилика', 'Оливковое масло'];
    }
}
