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

namespace WellCommerce\Bundle\ProductBundle\Entity;

use Knp\DoctrineBehaviors\Model\Translatable\Translation;
use WellCommerce\Bundle\CoreBundle\Doctrine\ORM\Behaviours\MetaDataTrait;
use WellCommerce\Bundle\IntlBundle\ORM\LocaleAwareInterface;
use WellCommerce\Bundle\RoutingBundle\Entity\Behaviours\RoutableTrait;
use WellCommerce\Bundle\RoutingBundle\Entity\RoutableSubjectInterface;

/**
 * Class ProductStatusTranslation
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ProductStatusTranslation implements LocaleAwareInterface, RoutableSubjectInterface
{
    use Translation;
    use MetaDataTrait;
    use RoutableTrait;
    
    /**
     * @var string
     */
    protected $name;

    /**
     * @var ProductStatusRoute|\WellCommerce\Bundle\RoutingBundle\Entity\RouteInterface
     */
    protected $route;

    /**
     * @var string
     */
    protected $cssClass;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCssClass()
    {
        return $this->cssClass;
    }

    /**
     * @param string $cssClass
     */
    public function setCssClass($cssClass)
    {
        $this->cssClass = $cssClass;
    }

    /**
     * @return ProductRoute|\WellCommerce\Bundle\RoutingBundle\Entity\RouteInterface
     */
    public function getRouteEntity()
    {
        return new ProductStatusRoute();
    }
}
