<?php

class SubscriberPriceCalculator implements TotalCalculatorInterface
{public function calculatePrice(array $tickets): float
{
    $ticketPrice = array_map(function ($ticket) {return $ticket->price;}, $tickets);
    return array_sum($ticketPrice) * 0.9;
}
}