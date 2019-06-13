<?php
class Smallrig_Testone_Model_Mysql4_Testone extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("testone/testone", "id");
    }
}