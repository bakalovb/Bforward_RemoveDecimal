<?php

/**
 * @package    Bforward_RemoveDecimal
 * @author     Bogdan Bakalov <bakalov.bogdan@gmail.com>
 */
class Bforward_RemoveDecimal_Model_Directory_Currency extends Mage_Directory_Model_Currency
{
    /**
     * Format price to currency format
     *
     * @param float $price
     * @param array $options
     * @param bool $includeContainer
     * @param bool $addBrackets
     * @return string
     */
    public function format($price, $options = array(), $includeContainer = true, $addBrackets = false)
    {
        if (Mage::getStoreConfig('catalog/removing_decimal/enable_removing_decimal') == 1) {
            return $this->formatPrecision($price, 0, $options, $includeContainer, $addBrackets);
        }
        return $this->formatPrecision($price, 2, $options, $includeContainer, $addBrackets);
    }
}