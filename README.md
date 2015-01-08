Usage
=====

	php\php.exe -S 127.0.0.1:8088 -t .

Reference
=========

	http://php.net/manual/en/function.json-encode.php

Enable MySQL Support
====================
    Check MySQL System Env Info
        <?php
            phpinfo();
        ?>

    If it's not MySQL there, add the following to php.ini:
        extension=ext\php_mysql.dll             ← 預設 PHP 並未開啟 MySQL Support 這個功能

    (*)Enable PHP Builtin MySQL Support in php.ini:
        display_errors = Off                    ← Deprecated MySQL Warning
        extension=ext\php_mysql.dll

Xdebug Install
==============

    # ref: http://xdebug.org/docs/install

    sudo apt-get install php5-xdebug

    sudo vim /etc/php5/apache2/php.ini 
        or
    sudo vim /etc/php5/cli/php.ini              ← If you use builtin PHP Server

    # Added for xdebug
        zend_extension="/usr/lib/php5/20121212/xdebug.so"           ← 日期會根據版本有差異
        xdebug.remote_enable=1
        xdebug.remote_handler=dbgp xdebug.remote_mode=req
        xdebug.remote_host=127.0.0.1 xdebug.remote_port=9000

    sudo service apache2 restart
