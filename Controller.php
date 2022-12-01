<?php

class Controller extends ElectronicItem
{
    public function __construct($price, $wired)
    {
        parent::__construct(self::ELECTRONIC_ITEM_CONTROLLER, $price, $wired);
    }

    function maxExtras()
    {
        return false;
    }
}
