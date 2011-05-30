<?php

class Bewype_Dummydebug_Model_Mysql4_Dummydebug extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('dummydebug/dummydebug', 'dummydebug_id');   
    }
}
