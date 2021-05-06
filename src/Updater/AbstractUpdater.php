<?php

namespace App\Updater;

use App\Item;

abstract class AbstractUpdater implements IUpdater
{
    protected Item $item;

    function __construct($item)
    {
        $this->item = $item;
    }

    abstract public static function resolve(Item $item):bool;

   protected function isExpired():bool
    {
        return $this->item->sell_in <= 0;
    }

    public function updateSellIn():void
    {
        $this->item->sell_in = $this->item->sell_in -1;
    }

   abstract public function update():void;
}