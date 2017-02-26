<?php
/**
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\WishlistBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use WellCommerce\Bundle\AppBundle\DataFixtures\AbstractDataFixture;

/**
 * Class LoadWishlistData
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class LoadWishlistData extends AbstractDataFixture
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        if (!$this->isEnabled()) {
            return;
        }
        
        $this->createLayoutBoxes($manager, [
            'wishlist' => [
                'type' => 'Wishlist',
                'name' => 'Wishlist',
            ],
        ]);
        
        $manager->flush();
    }
}
