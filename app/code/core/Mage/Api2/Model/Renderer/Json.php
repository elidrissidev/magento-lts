<?php

/**
 * OpenMage
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available at https://opensource.org/license/osl-3-0-php
 *
 * @category   Mage
 * @package    Mage_Api2
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://www.magento.com)
 * @copyright  Copyright (c) 2022-2024 The OpenMage Contributors (https://www.openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Webservice API2 renderer of JSON type model
 *
 * @category   Mage
 * @package    Mage_Api2
 */
class Mage_Api2_Model_Renderer_Json implements Mage_Api2_Model_Renderer_Interface
{
    /**
     * Adapter mime type
     */
    public const MIME_TYPE = 'application/json';

    /**
     * Convert Array to JSON
     *
     * @param array|object $data
     * @return string
     */
    public function render($data)
    {
        return Zend_Json::encode($data);
    }

    /**
     * Get MIME type generated by renderer
     *
     * @return string
     */
    public function getMimeType()
    {
        return self::MIME_TYPE;
    }
}
