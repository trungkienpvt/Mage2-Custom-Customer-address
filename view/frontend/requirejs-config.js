var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/set-shipping-information': {
                'Dev69_CustomerAddress/js/action/set-shipping-information-mixin': true
            },
            'Magento_Checkout/js/action/create-shipping-address': {
                'Dev69_CustomerAddress/js/action/create-shipping-address-mixin': true
            },
        }
    }
};
