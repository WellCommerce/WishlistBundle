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

namespace WellCommerce\Bundle\CoreBundle\Form\Resolver;

use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Class FilterResolver
 *
 * @package WellCommerce\Bundle\CoreBundle\Form\Resolver
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class FilterResolver extends ContainerAware implements ResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function resolve($type)
    {
        $service = sprintf('form.filter.%s', $type);
        if (!$this->container->has($service)) {
            throw new \InvalidArgumentException(sprintf('Tried to get filter "%s" which does not exists in container', $service));
        }

        return $this->container->get($service);
    }
} 