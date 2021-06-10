<?php

declare(strict_types=1);

namespace Tests;

use App\InterfaceItem;
use App\IUpdaterFactoryRegistry;
use App\UpdaterFactory;
use App\Updater\IUpdater;
use PHPUnit\Framework\TestCase;

class UpdaterFactoryTest extends TestCase
{
    public function testUpdaterFactoryBuild() :void
    {
        $item=$this->createMock(InterfaceItem::class);

        $updater = $this->getMockBuilder(IUpdater::class)
                        ->getMock();

        $factoryRegistry=$this->createMock(IUpdaterFactoryRegistry::class);
        $factoryRegistry->method('resolve')->willReturn(get_class($updater));

        $updaterFactory = new UpdaterFactory($factoryRegistry);

        $newUpdater = $updaterFactory->build($item);

        $this->assertSame(get_class($newUpdater),get_class($updater) );
                
    }
}