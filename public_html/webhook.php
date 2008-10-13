<?php

var_dump($_REQUEST['payload']);

exec ("cd /home/webadmin/php-users.jp/repos;git pull origin master");

echo "success";
