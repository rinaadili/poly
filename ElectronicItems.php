<?php

class ElectronicItems
{
    private $items = array();

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getSortedItems($type)
    {
        $sorted = array();
        ksort($sorted, SORT_NUMERIC);
        return $sorted;
    }

    public function sortItemsByPrice()
    {
        $sortedItems = $this->items;

        usort($sortedItems, function($firstItem, $secondItem) {
            return $firstItem->getPrice() < $secondItem->getPrice() ? 1 : -1;
        });

        return $sortedItems;
    }

    public function getItemsByType($type)
    {
        if (in_array($type, ElectronicItem::$types))
        {
            $callback = function($item) use ($type)
            {
                return $item->getType() === $type;
            };
        }
        return array_filter($this->items, $callback);
    }

    public function totalPrice()
    {
        $totalPrice = 0;
        foreach($this->items as $item) {
            $totalPrice += $item->getPrice();
        }

        return $totalPrice;
    }
}