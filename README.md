# magento1 composer 
Very small implementation to be able to use composer PHP packages and classes in magento. If you want to use composer to be able to install magento modules, please take a look at https://github.com/Cotya/magento-composer-installer .

# usage
Goto lib/Composer folder magento
Execute composer installer,  see: https://getcomposer.org/download/

Install composer packages 


# example
Example of using the piquer exact client
In your shell: 
    composer require picqer/exact-php-client
    
Usage in code: 
      $item = new \Picqer\Financials\Exact\GLAccount($this->connect());
     