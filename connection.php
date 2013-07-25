<?php
 define('DB_NAME','mdb_bm340');
 define('DB_USER','bm340');
 define('DB_PASSWORD','reardp9F');
 define('DB_HOST','mysql.cms.gre.ac.uk');
 $link =mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
 if(!$link){
 die('Couldn\'t connect' .mysql_error());
 }

 $db_selected=mysql_select_db(DB_NAME,$link);
 if(!$db_selected){
 die('Can\'t use' .DB_NAME. ':' .mysql_error());
 }
 ?>