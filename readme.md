Osano Cookie Consent Magento 2 Extension
=====================
Magento 2 Extension for the [Osano Cookie Consent Javascript plugin](https://www.osano.com/cookieconsent).

Facts
-----
- version: 1.1.0

Description
-----------
The Osano Cookie Consent Magento 2 Extension provides a quick and easy way to add a cookie consent popup powered by Osano's Cookie Consent javascript plugin. 

Requirements
------------

Compatibility
-------------
- Magento >= 2.1

Composer Installation Instructions
-------------------------

1. Add the extension via composer

    `composer require iconocoders/module-osano-cookie-consent`

2. Run Composer Update

    `composer update iconocoders/module-osano-cookie-consent`

3. Enable the module

    `bin/magento module:enable Iconocoders_OsanoCookieConsent`

4. Run upgrade and flush caches

    * `bin/magento setup:upgrade`
    
    * `bin/magento cache:flush`

Customization 
--------------
You can configure the cookie consent pop up within the magento admin at Admin -> Store -> Iconocoders -> Osano Cookie Consent.

Supported Customization Options
-------------
- ability for admin to change cookie consent popup background color
- ability for admin to change cookie consent popup button background color
- ability for admin to change cookie consent popup text
- ability for admin to change cookie consent popup more info link
- ability for admin to change cookie consent popup button text

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/iconocoders/module-osano-cookie-consent/issues).

Contribution
------------
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://github.com/iconocoders/module-osano-cookie-consent/pulls).

Developer
---------
Carlos Reynosa

- Website: [https://icoders.co](https://icoders.co)

Copyright
---------
(c) 2020 Iconocoders
