<?php

declare(strict_types=1);

namespace Tests;

use App\InterfaceItem;
use App\Updater\AgedBrieUpdater;
use PHPUnit\Framework\TestCase;

class AgedBrieUpdaterTest extends TestCase
{
    public function testAgedBrieResolveReturnTrue() :void
    {
     $item = $this->getMockBuilder(InterfaceItem::class)->getMock();
     $item->name = 'Aged Brie';
     $agedBrieUpdater = new AgedBrieUpdater($item);
     $this->assertTrue($agedBrieUpdater->resolve($item));
    }
}