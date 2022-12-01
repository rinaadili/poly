<?php

abstract class ElectronicItem
{
    const ELECTRONIC_ITEM_TELEVISION = 'television';
    const ELECTRONIC_ITEM_CONSOLE = 'console';
    const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
    const ELECTRONIC_ITEM_CONTROLLER = 'controller';
    public static $types = array(
        self::ELECTRONIC_ITEM_CONSOLE,
        self::ELECTRONIC_ITEM_MICROWAVE,
        self::ELECTRONIC_ITEM_TELEVISION);
    private $type;
    public $price;
    public $wired;

    public function __construct($type, $price, $wired)
    {
        $this->type = $type;
        $this->price = $price;
        $this->wired = $wired;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function getType()
    {
        return $this->type;
    }

    function setType($type)
    {
        $this->type = $type;
    }

    function getWired()
    {
        return $this->wired;
    }

    function setWired($wired)
    {
        $this->wired = $wired;
    }

    function toString()
    {
        return $this->type . ' - ' . $this->price . '$';
    }

    abstract function maxExtras();
}