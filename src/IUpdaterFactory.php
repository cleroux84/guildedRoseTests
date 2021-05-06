<?php

namespace App;
use App\Item;
use App\Updater\IUpdater;

interface IUpdaterFactory
{
    public function build(Item $item):IUpdater;
}