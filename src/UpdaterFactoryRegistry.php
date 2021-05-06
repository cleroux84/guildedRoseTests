<?php

namespace App;

class UpdaterFactoryRegistry implements IUpdaterFactoryRegistry
{

    private array $updaters = [];

    // push the name of Updater Class in $updaters
    public function register(string $updater): void
    {
        array_push($this->updaters, $updater);
    }

    public function resolve(Item $item):string
    {
        foreach ($this->updaters as $u){
            if($u::resolve($item))
                return $u;
        }
    }
}
