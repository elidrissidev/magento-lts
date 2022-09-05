<?php
/**
 * OpenMage
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * @category   Mage
 * @package    Mage_Sales
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (http://www.magento.com)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/** @var Mage_Sales_Model_Entity_Setup $installer */
$installer = $this;

$installer->addAttribute('quote', 'customer_prefix', ['type'=>'static']);
$installer->addAttribute('quote', 'customer_middlename', ['type'=>'static']);
$installer->addAttribute('quote', 'customer_suffix', ['type'=>'static']);

$installer->addAttribute('quote_address', 'prefix', ['type'=>'static']);
$installer->addAttribute('quote_address', 'middlename', ['type'=>'static']);
$installer->addAttribute('quote_address', 'suffix', ['type'=>'static']);
