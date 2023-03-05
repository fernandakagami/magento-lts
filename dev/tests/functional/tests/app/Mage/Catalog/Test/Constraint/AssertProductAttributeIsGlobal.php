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
 * @category    Tests
 * @package     Tests_Functional
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://www.magento.com)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Mage\Catalog\Test\Constraint;

use Magento\Mtf\Constraint\AbstractConstraint;
use Mage\Catalog\Test\Fixture\CatalogProductAttribute;
use Mage\Catalog\Test\Page\Adminhtml\CatalogProductAttributeIndex;

/**
 * Assert that product attribute is global.
 */
class AssertProductAttributeIsGlobal extends AbstractConstraint
{
    /* tags */
    const SEVERITY = 'low';
    /* end tags */

    /**
     * Assert that product attribute is global.
     *
     * @param CatalogProductAttribute $attribute
     * @param CatalogProductAttributeIndex $attributeIndexPage
     * @return void
     */
    public function processAssert(CatalogProductAttribute $attribute, CatalogProductAttributeIndex $attributeIndexPage)
    {
        $attributeIndexPage->open();
        $code = $attribute->getAttributeCode();
        $filter = ['attribute_code' => $code, 'is_global' => $attribute->getIsGlobal()];
        \PHPUnit_Framework_Assert::assertTrue(
            $attributeIndexPage->getGrid()->isRowVisible($filter),
            "Attribute with attribute code '$code' isn't global."
        );
    }

    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function toString()
    {
        return 'Attribute is global.';
    }
}