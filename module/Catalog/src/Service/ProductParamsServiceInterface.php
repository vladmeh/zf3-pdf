<?php
/**
 * Created by Alpha-Hydro.
 * @link http://www.alpha-hydro.com
 * @author Vladimir Mikhaylov <admin@alpha-hydro.com>
 * @copyright Copyright (c) 2016, Alpha-Hydro
 *
 */

namespace Catalog\Service;


use Zend\Db\ResultSet\ResultSet;

interface ProductParamsServiceInterface
{
    /**
     * @param bool $toArray
     * @return array | ResultSet
     */
    public function fetchAll($toArray = false);
}