<?php

declare(strict_types=1);

namespace Tests;

use App\GildedRose;
use App\Item;
use App\UpdaterFactoryRegistry;
use PHPUnit\Framework\TestCase;
use App\Updater\AgedBrieUpdater;
use App\Updater\BackstagePassUpdater;
use App\Updater\ConjuredItemUpdater;
use App\Updater\ItemUpdater;
use App\Updater\SulfurasUpdater;
use App\UpdaterFactory;

class GildedRoseTest extends TestCase
{
    public function testFoo(): void
    {
        $items = [new Item('Elixir of the Mongoose', 5, 3)];

        $registry = new UpdaterFactoryRegistry();
        $registry->register(AgedBrieUpdater::class);
        $registry->register(BackstagePassUpdater::class);
        $registry->register(ConjuredItemUpdater::class);
        $registry->register(SulfurasUpdater::class);
        $registry->register(ItemUpdater::class);

        $factory = new UpdaterFactory($registry);

        $gildedRose = new GildedRose($items, $factory);
        $gildedRose->updateQuality($items);
        $this->assertSame('Elixir of the Mongoose', $items[0]->name);
    }
}
