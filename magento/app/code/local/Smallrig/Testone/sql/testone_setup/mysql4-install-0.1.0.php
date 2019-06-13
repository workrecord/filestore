<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
CREATE TABLE `testone` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `company` varchar(100) NOT NULL,
  `main_product` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `testone` (`id`, `email`, `address`, `telephone`, `company`, `main_product`) VALUES
(1, '12166@qq.com', 'china', '12345678901', 'smallrig', 'camera'),
(2, '38778@qq.com', 'shenzhen', '10987654321', 'girllams', 'aremac');

ALTER TABLE `testone`  ADD PRIMARY KEY (`id`);

ALTER TABLE `testone`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 