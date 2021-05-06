<?php

namespace App;
use App\Item;

interface IUpdaterFactoryRegistry
{
    public function resolve(Item $item):string;

    public function register(string $updater): void;
}