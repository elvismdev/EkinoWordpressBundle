<?php
/*
 * This file is part of the Ekino Wordpress package.
 *
 * (c) 2013 Ekino
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ekino\WordpressBundle\Manager;

/**
 * Class OptionManager
 *
 * This is the Option entity manager
 *
 * @author Vincent Composieux <composieux@ekino.com>
 */
class OptionManager extends BaseManager
{
    /**
     * @param string $optionName
     *
     * @return mixed
     */
    public function findOneByOptionName($optionName)
    {
        return $this->findOneBy(array('name' => $optionName));
    }
}