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
use Yrgo\Shark;
use Yrgo\Weapons\Laser;
use Yrgo\Weapons\Weapon;
/**
 * This is the shark test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class SharkTest extends TestCase
{
    public function testGetWeapon()
    {
        $laser = new Laser();
        $shark = new Shark($laser);

        $this->assertSame($laser, $shark->getWeapon());
    }
}
