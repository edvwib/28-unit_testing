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

namespace Yrgo\Weapons;

use ReflectionClass;

/**
 * This is the abstract weapon class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
abstract class Weapon
{
    /**
     * Get the weapon's name.
     *
     * @return string
     */
    public function getName(): string
    {
        $reflect = new ReflectionClass($this);

        return mb_strtolower($reflect->getShortName());
    }
}
