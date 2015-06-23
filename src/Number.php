<?php
/**
 * SCSSPHP
 *
 * @copyright 2012-2015 Leaf Corcoran
 *
 * @license http://opensource.org/licenses/gpl-license GPL-3.0
 * @license http://opensource.org/licenses/MIT MIT
 *
 * @link http://leafo.net/scssphp
 */

namespace Leafo\ScssPhp;

/**
 * SCSS dimension + optional units
 *
 * @author Anthon Pang <anthon.pang@gmail.com>
 */
class Number implements \ArrayAccess
{
    /**
     * @var integer|float
     */
    public $dimension;

    /**
     * @var string
     */
    public $units;

    /**
     * Initialize number
     *
     * @param mixed  $dimension
     * @param string $unit
     */
    public function __construct($dimension, $unit)
    {
        $this->dimension = $dimension;
        $this->units = $unit;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        if ($offset === 0) {
            return true;
        }

        if ($offset === 1) {
            return true;
        }

        if ($offset === 2) {
            return true;
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        if ($offset === 0) {
            return 'number';
        }

        if ($offset === 1) {
            return $this->dimension;
        }

        if ($offset === 2) {
            return $this->units;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        if ($offset === 1) {
            $this->dimension = $value;
        } elseif ($offset === 2) {
            $this->units = $value;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        if ($offset === 1) {
            $this->dimension = null;
        } elseif ($offset === 2) {
            $this->units = null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return (string) $this->dimension . $this->units;
    }
}
