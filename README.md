# Mage2 Module Swirth ScrollToTop

    ``swirth/module-scrolltotop``

- [Description](#markdown-header-description)
- [Installation](#markdown-header-installation)
- [Configuration](#markdown-header-configuration)

## Description

Basically, this module makes a Scroll Top button.

## Installation

\* = in production please use the `--keep-generated` option
> - `composer require swirth/module-scroll-to-top`
> - `bin/magento setup:upgrade `
> - Navigate to "Shop->Configuration->Swirth->ScrollToTop" and configure the options.
> - Clear the cache.

### Type 1: Zip file

- Unzip the zip file in `app/code/Swirth`
- Enable the module by running `php bin/magento module:enable Swirth_ScrollToTop`
- Apply database updates by running `php bin/magento setup:upgrade`\*
- Flush the cache by running `php bin/magento cache:flush`

