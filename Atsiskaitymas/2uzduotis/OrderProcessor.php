<?php

class OrderProcessor
{
    private array $cinemaTicket;
    private TotalCalculatorInterface $calculator;

public function __construct(TotalCalculatorInterface $calculator)
{
  $this->calculator = $calculator;
}

public function addItem(CinemaTicket $ticket): void
{
    $this->cinemaTicket[] = $ticket;
}
public function getList(): array {
   return $this->cinemaTicket;
}
public function calculatePrice(): float
{
return $this->calculator->calculatePrice($this->cinemaTicket);
}

}