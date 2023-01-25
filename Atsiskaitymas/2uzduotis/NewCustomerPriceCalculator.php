<?php

class NewCustomerPriceCalculator implements TotalCalculatorInterface
{

    public function calculatePrice(array $tickets):float
    {
        $totalPrice = 0;
        foreach($tickets as $ticket) {
            if ($totalPrice == 0){
                $totalPrice += $ticket->price*0.8;
            }
        else $totalPrice += $ticket->price;
        }
        return $totalPrice;
    }
}