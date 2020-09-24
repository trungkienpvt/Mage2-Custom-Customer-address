/*jshint browser:true jquery:true*/
/*global alert*/
define([
    'jquery',
    'mage/utils/wrapper',
    'mage/url',
    'Magento_Checkout/js/model/address-converter',
    'underscore'
], function ($, wrapper, url, addressConverter, _) {
    'use strict';
    var customData = window.checkoutConfig;

    return function (setCustomAttributeToAddress) {

        return wrapper.wrap(setCustomAttributeToAddress, function (originalAction, messageContainer) {

            return originalAction(messageContainer)
        });
    };
})
