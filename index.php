<?php
$a = 'abcdef';
echo $a{3};
?>
CREATE TABLE IF NOT EXISTS `user3` (   
  `id` int(11) NOT NULL AUTO_INCREMENT,   
   `name` varchar(50) NOT NULL DEFAULT 'wuming',   
   `sex` int(1) NOT NULL DEFAULT '0',   
  PRIMARY KEY (`id`)   
 ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ; 

 CREATE TABLE IF NOT EXISTS `okuser` (   
  `id` int(11) NOT NULL AUTO_INCREMENT,   
  `name` varchar(50) NOT NULL DEFAULT 'wuming',   
  `sex` int(1) NOT NULL DEFAULT '0',   
   INDEX(id)   
  )ENGINE=MRG_MyISAM UNION=(user1,user2,user3)  DEFAULT CHARSET=utf8  INSERT_METHOD=LAST  AUTO_INCREMENT=1 ;   