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
    //    remove fields from billing
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

    return $fields;
}

add_action('woocommerce_single_product_summary', 'show_checkout_billing_form', 25);

function show_checkout_billing_form()
{
    if (function_exists('woocommerce_checkout')) {
        woocommerce_checkout();
    }
}
