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
