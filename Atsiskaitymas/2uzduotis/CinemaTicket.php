<?php

class CinemaTicket
{
    public string $filmTitle;
    public string $place;
    public DateTime $date;
    public float $price;

    public function __construct(string $filmTitle, string $place, DateTime $date, float $price)
    {
        $this->filmTitle = $filmTitle;
        $this->place = $place;
        $this->date = $date;
        $this->price = $price;
    }
}