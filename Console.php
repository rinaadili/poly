<?php

class Console extends ElectronicItem
{
    private $extras = array();
    private $maxExtras = 4;

    public function __construct($price, $wired)
    {
        parent::__construct(self::ELECTRONIC_ITEM_CONSOLE, $price, $wired);
    }

    function getExtras()
    {
        return $this->extras;
    }

    function priceWithExtras()
    {
        $totalPrice = $this->getPrice();
        foreach ($this->getExtras() as $extra) {
            $totalPrice += $extra->getPrice();
        }

        return $totalPrice;
    }

    function maxExtras()
    {
        return count($this->extras) <= $this->maxExtras;
    }

    function addExtra($extra)
    {
        if($this->maxExtras()) {
            array_push($this->extras, $extra);
        } else {
            echo "You're not allowed to add extras!";
        }
    }
}