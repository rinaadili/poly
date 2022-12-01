<?php

class Microwave extends ElectronicItem
{
    public function __construct($price, $wired)
    {
        parent::__construct(self::ELECTRONIC_ITEM_MICROWAVE, $price, $wired);
    }

    function maxExtras()
    {
        return false;
    }
}