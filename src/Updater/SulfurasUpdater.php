<?php

namespace App\Updater;

use App\Item;

class SulfurasUpdater extends AbstractUpdater implements IUpdater
{

    static function resolve(Item $item):bool {
        if($item->name === "Sulfuras, Hand of Ragnaros") {
            return true;
        } else {
            return false;
        }
    }

    public function update():void {
    }
}
