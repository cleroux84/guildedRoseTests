<?php

namespace App\Updater;

use App\Item;

interface IUpdater
{
    public static function resolve(Item $item):bool;
 
    public function updateSellIn():void;
 
    public function update():void;
}