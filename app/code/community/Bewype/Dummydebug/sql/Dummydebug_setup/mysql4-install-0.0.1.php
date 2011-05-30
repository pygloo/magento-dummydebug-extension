<?php

$installer = $this;

$installer->startSetup();

$sql = "
DROP TABLE IF EXISTS {$this->getTable('bewype_dummydebug')};
CREATE TABLE {$this->getTable('bewype_dummydebug')} (
  `dummydebug_id` int(11) NOT NULL AUTO_INCREMENT,
  `debug_class` varchar(255) DEFAULT NULL,
  `debug_method` varchar(255) DEFAULT NULL,
  `debug_log` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dummydebug_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
";

$installer->run($sql);

$installer->endSetup();
