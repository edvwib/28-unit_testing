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

namespace Yrgo;

use Yrgo\Weapons\Weapon;

/**
 * This is the shark class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class Shark
{
    /**
     * The shark's weapon.
     *
     * @var \Yrgo\Weapons\Weapon
     */
    protected $weapon;

    /**
     * Create a new shark instance.
     *
     * @param \Yrgo\Weapons\Weapon $weapon
     *
     * @return void
     */
    public function __construct(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    /**
     * Get the shark's weapon.
     *
     * @return \Yrgo\Weapons\Weapon
     */
    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }
}
