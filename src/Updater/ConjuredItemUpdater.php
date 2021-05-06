<?php

namespace App\Updater;

use App\Item;

class ConjuredItemUpdater extends AbstractUpdater implements IUpdater
{

    static function resolve(Item $item):bool {
        if($item->name === "Conjured Mana Cake") {
            return true;
        } else {
            return false;
        }
    }

    public function update():void {
        if($this->isExpired()) {
            $this->item->quality = $this->item->quality -2 <= 0 ?
            $this->item->quality = 0 : $this->item->quality -2;
        } else {
            $this->item->quality = $this->item->quality -1 <= 0 ?
            $this->item->quality = 0 : $this->item->quality -1;
        }

        $this->updateSellIn();
    }

}
