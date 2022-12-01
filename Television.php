<?php

class Television extends ElectronicItem
{
    private $extras = array();

    public function __construct($price, $wired)
    {
        parent::__construct(self::ELECTRONIC_ITEM_TELEVISION, $price, $wired);
    }

    //Television has no maximum extras so this always returns true
    function maxExtras()
    {
        return true;
    }

    function addExtra($extra)
    {
        if ($this->maxExtras()) {
            array_push($this->extras, $extra);
        } else {
            echo "You're not allowed to add extras!";
        }
    }
}