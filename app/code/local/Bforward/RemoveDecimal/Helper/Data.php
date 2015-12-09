<?php

/**
 * @package    Bforward_RemoveDecimal
 * @author     Bogdan Bakalov <bakalov.bogdan@gmail.com>
 */
class Bforward_RemoveDecimal_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Gets extension status from system->configuration->catalog->Remove decimals from price
     * @return int
     */
    public function getExtensionStatus()
    {
        return Mage::getStoreConfig('catalog/removing_decimal/enable_removing_decimal');
    }
}