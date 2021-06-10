<?php

declare(strict_types=1);

namespace Tests;

use App\InterfaceItem;
use App\Updater\ConjuredItemUpdater;
use PHPUnit\Framework\TestCase;

class ConjuredItemTest extends TestCase
{
    public function testConjuredItemUpdate() :void
    {
        $item = $this->getMockBuilder(InterfaceItem::class)->getMock();
        $item->quality = 4;
        $item->sell_in = 5;
        $conjuredItemUpdater = new ConjuredItemUpdater($item);
        $conjuredItemUpdater->update();
        $this->assertEquals(4, $item->sell_in);            
        $this->assertEquals(3, $item->quality);            
    }
}