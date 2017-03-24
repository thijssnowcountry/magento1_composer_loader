<?php

/**
 * Inspired by Dave Nacaulay http://davemacaulay.com/how-to-include-composer-libraries-within-magento/
 */
class Tdj_Composerloader_Model_Observer
{

    public function controllerFrontInitBefore(Varien_Event_Observer $observer)
    {
        self::init();
    }

    static function init()
    {
        // Add the composer vendor folder to our include path
        set_include_path(get_include_path() . PATH_SEPARATOR . Mage::getBaseDir('lib') . DS . 'Composer' . DS . 'vendor');

        // Include the autoloader for composer
        require_once(Mage::getBaseDir('lib') . DS . 'Composer' . DS . 'vendor' . DS . 'autoload.php');
    }
}
