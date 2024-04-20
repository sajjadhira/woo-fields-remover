<?php
/*
Plugin Name: Woo Fields Remover
Description: Remove fields from WooCommerce checkout page
Version: 1.0
Author: Pluginoo
Author URI: https://pluginoo.com
*/

add_filter('woocommerce_checkout_fields', 'woo_fields_remover');

function woo_fields_remover($fields)
{
    // Remove fields from billing
    // unset($fields['billing']['billing_first_name']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    // unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    // unset($fields['billing']['billing_phone']);
    unset($fields['billing']['billing_email']);
    unset($fields['billing']['ship_to_different_address']);

    // Remove validation rules for billing fields
    // unset($fields['billing']['billing_last_name']['required']);
    unset($fields['billing']['billing_company']['required']);
    // unset($fields['billing']['billing_address_1']['required']);
    unset($fields['billing']['billing_address_2']['required']);
    unset($fields['billing']['billing_city']['required']);
    unset($fields['billing']['billing_postcode']['required']);
    unset($fields['billing']['billing_country']['required']);
    unset($fields['billing']['billing_state']['required']);
    // unset($fields['billing']['billing_phone']['required']);
    unset($fields['billing']['billing_email']['required']);

    // remove fields from shipping
    // unset($fields['shipping']['shipping_first_name']);
    unset($fields['shipping']['shipping_last_name']);
    unset($fields['shipping']['shipping_company']);
    // unset($fields['shipping']['shipping_address_1']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_city']);
    unset($fields['shipping']['shipping_postcode']);
    unset($fields['shipping']['shipping_country']);
    unset($fields['shipping']['shipping_state']);
    // unset($fields['shipping']['shipping_phone']);
    unset($fields['shipping']['shipping_email']);
    unset($fields['shipping']['ship_to_different_address']);

    // Remove validation rules for shipping fields
    // unset($fields['shipping']['shipping_last_name']['required']);
    unset($fields['shipping']['shipping_company']['required']);
    // unset($fields['shipping']['shipping_address_1']['required']);
    unset($fields['shipping']['shipping_address_2']['required']);
    unset($fields['shipping']['shipping_city']['required']);
    unset($fields['shipping']['shipping_postcode']['required']);
    unset($fields['shipping']['shipping_country']['required']);
    unset($fields['shipping']['shipping_state']['required']);
    // unset($fields['shipping']['shipping_phone']['required']);
    unset($fields['shipping']['shipping_email']['required']);




    return $fields;
}


remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

add_action('woocommerce_single_product_summary', 'custom_direct_checkout_form', 30);
function custom_direct_checkout_form()
{
    global $product;
    if (!$product->is_type('variable')) {
        echo do_shortcode('[woocommerce_quick_buy]');
    }
}
