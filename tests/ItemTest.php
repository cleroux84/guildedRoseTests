<?php

declare(strict_types=1);

namespace Tests;

use App\Item;
use PHPUnit\Framework\TestCase;


class ItemTest extends TestCase
{
    public function testItemReturnString() :void
    {
        $item = new Item('Elixir of the Mongoose', 5, 3);
        $this->assertSame("Elixir of the Mongoose, 5, 3", $item->__toString());
    }
}