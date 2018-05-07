<?php

declare(strict_types=1);

namespace Yrgo\Tests\TornadoTest;

use PHPUnit\Framework\TestCase;
use Yrgo\Shark;
use Yrgo\Tornado;
use Yrgo\Weapons\Laser;
/**
 * This is the laser weapon test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class TornadoTest extends TestCase
{
    public function testGetSharks(): void
    {
        $sharks = [
            new Shark(new Laser()), new Shark(new Laser()),
        ];

        $tornado = new Tornado($sharks);

        $this->assertSame($sharks, $tornado->getSharks());
    }
}
