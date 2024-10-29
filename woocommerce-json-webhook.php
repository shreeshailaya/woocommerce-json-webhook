<?php
/*
Plugin Name: WooCommerce JSON Webhook
Description: Sends WooCommerce webhook data in application/json format instead of application/x-www-form-urlencoded.
Version: 1.0
Author: Shreeshail Vitkar
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Convert WooCommerce webhook payload to JSON format
function wc_json_webhook_payload($payload, $resource, $resource_id, $webhook_id) {
    return json_encode($payload);
}
add_filter('woocommerce_webhook_payload', 'wc_json_webhook_payload', 10, 4);

// Set WooCommerce webhook content type to application/json
function wc_json_webhook_http_args($http_args, $webhook_id, $webhook) {
    $http_args['headers']['Content-Type'] = 'application/json';
    return $http_args;
}
add_filter('woocommerce_webhook_http_args', 'wc_json_webhook_http_args', 10, 3);
