<?php

class StandardPriceCalculator implements TotalCalculatorInterface
{

    public function calculatePrice(array $tickets):float
    {
        $totalPrice = 0;
        foreach($tickets as $ticket) {
                $totalPrice += $ticket->price;
        }
        return $totalPrice;
    }
}

//- standartinis -> praeina per visus ticketus ir sudeda ju kainą

