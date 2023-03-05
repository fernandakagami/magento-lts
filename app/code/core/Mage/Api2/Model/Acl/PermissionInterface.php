<?php
/**
 * OpenMage
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * @category   Mage
 * @package    Mage_Api2
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://www.magento.com)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * API2 ACL resource permission interface
 *
 * @category   Mage
 * @package    Mage_Api2
 * @author     Magento Core Team <core@magentocommerce.com>
 */
interface Mage_Api2_Model_Acl_PermissionInterface
{
    /**
     * Get ACL resources permissions
     *
     * Get permissions list with set permissions
     *
     * @return array
     */
    public function getResourcesPermissions();

    /**
     * Set filter value
     *
     * @param mixed $filterValue
     * @return Mage_Api2_Model_Acl_PermissionInterface
     */
    public function setFilterValue($filterValue);
}