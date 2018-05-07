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

/**
 * This is the tornado class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class Tornado
{
    /**
     * The array of sharks.
     *
     * @var array
     */
    protected $sharks;

    /**
     * Create a new tornado instance.
     *
     * @param array $sharks
     *
     * @return void
     */
    public function __construct(array $sharks = [])
    {
        $this->sharks = $sharks;
    }

    /**
     * Get the array of sharks.
     *
     * @return array
     */
    public function getSharks(): array
    {
        return $this->sharks;
    }
}
