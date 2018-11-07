<?php

namespace Winfrench\HideCountry\Plugin\Block\Checkout;

class LayoutProcessor extends \Magento\Checkout\Block\Checkout\LayoutProcessor {

    /**
     * @param \Magento\Checkout\Block\Checkout\LayoutProcessor $subject
     * @param array $jsLayout
     * @return array
     */
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array $jsLayout)
    {
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
        ['children']['shippingAddress']['children']['shipping-address-fieldset']['children']['country_id']['visible'] = false;

        return $jsLayout;
    }
}
