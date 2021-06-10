<?php

namespace App;
use App\Updater\IUpdater;
use App\InterfaceItem;

interface IUpdaterFactory
{
    public function build(InterfaceItem $item):IUpdater;
}