<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\ShippingMethod\Calculator;

/**
 * Class ShippingMethodCalculatorCollection
 *
 * @package WellCommerce\ShippingMethod\Calculator
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ShippingMethodCalculatorCollection implements \IteratorAggregate, \Countable
{
    /**
     * @var array Collection of shipping method calculators
     */
    private $calculators;

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->calculators);
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return count($this->calculators);
    }

    /**
     * {@inheritdoc}
     */
    public function add($alias, ShippingMethodCalculatorInterface $calculator)
    {
        $this->calculators[$alias] = $calculator;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return $this->calculators;
    }

} 