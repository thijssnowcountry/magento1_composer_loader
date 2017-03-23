# Magento1 composer 
Very small implementation to be able to use composer PHP packages and classes in magento. If you want to use composer to be able to install magento modules, please take a look at https://github.com/Cotya/magento-composer-installer .

# Usage
Step 1: Goto lib/Composer folder magento and excute composer installer,  see: https://getcomposer.org/download/
Step 2: Install composer packages you need (see example)

# Example
In this example, i am using the [piquer exact client](https://github.com/picqer/exact-php-client).

Step one: execute in shell: 
```
    composer require picqer/exact-php-client
```
    
Usage in code: 
```php
      $item = new \Picqer\Financials\Exact\GLAccount($connection);
```     