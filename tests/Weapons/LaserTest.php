<?php

/*
 * This file is part of Yrgo.
 *
 * (c) Yrgo, högre yrkesutbildning.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Yrgo\Tests\Weapons;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;
use Yrgo\Shark;
use Yrgo\Weapons\Laser;

/**
 * This is the laser weapon test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class LaserTest extends TestCase
{
    public function testGetName()
    {
        $laser = new Laser();
        $this->assertSame('laser', $laser->GetName());
    }

    public function testGetColor()
    {
        $laser = new Laser();
        $laser2 = new Laser();
        $laser2->setColor('tomato');

        $this->assertSame(null, $laser->getColor());
        $this->assertSame('tomato', $laser2->getColor());
    }

    public function testSetColor()
    {
        $laser = new Laser();
        $expectedColor = 'tomato';

        $laser->setColor($expectedColor);

        $this->assertSame($expectedColor, $laser->getColor());
    }

    public function testSetInvalidColor()
    {
        $laser = new Laser();
        $invalidColor = 'red';
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Invalid laser color [$invalidColor].");

        $laser->setColor($invalidColor);
    }
}
