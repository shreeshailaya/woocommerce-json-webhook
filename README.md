# WooCommerce JSON Webhook

**Contributors**: Shreeshail Vitkar  
**Tags**: WooCommerce, webhook, JSON  
**Requires at least**: 5.0  
**Tested up to**: 6.0  
**Stable tag**: 1.0  
**License**: GPLv2 or later  
**License URI**: https://www.gnu.org/licenses/gpl-2.0.html  

A simple plugin to send WooCommerce webhook data in `application/json` format instead of the default `application/x-www-form-urlencoded`.

## Description

WooCommerce JSON Webhook modifies the default WooCommerce webhook data format, changing it from `application/x-www-form-urlencoded` to `application/json`. This can be useful when integrating WooCommerce with APIs or services that require JSON payloads for data processing.

### Features
- Converts WooCommerce webhook data to JSON format.
- Sets the `Content-Type` header to `application/json` for outgoing webhooks.

## Installation

1. Download the plugin and unzip it.
2. Upload the `woocommerce-json-webhook` folder to your `/wp-content/plugins/` directory.
3. Go to **WordPress Admin > Plugins**, find **WooCommerce JSON Webhook**, and click **Activate**.

## Usage

Once activated, the plugin will automatically convert outgoing WooCommerce webhook payloads to JSON format. No additional configuration is needed.

### How to Test
1. Ensure you have WooCommerce webhooks set up (e.g., for order creation or order completion).
2. Complete an order or trigger an event that activates a webhook.
3. Check the endpoint to verify the data is sent in JSON format.

## Changelog

### 1.0
- Initial release: Converts WooCommerce webhook data to JSON format.

## License

This plugin is licensed under the GPLv2 or later.
